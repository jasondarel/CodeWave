<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Enrollment;
use App\Models\StudentLesson;
use Illuminate\Support\Facades\Auth;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    //

    public function isEnrollmentExists($enroll_list, $id){
        return $enroll_list->contains("course_id", $id);
    }
    public function courseListPage(){

        // if(!Auth::user()){
        //     return view('courses', ["isAuthenticated" => false]);

        // }
        $enroll_list = $this->getUserEnrollment();
      
        $isEnrollmentExists = function($id) use ($enroll_list) {
            return $this->isEnrollmentExists($enroll_list, $id);
        };

      
        
        $goToSelectedCourse = function($id) {
            return "my-courses/" . (str_replace(" ", "-", strtolower($this->getCourseWithId($id)->name)));
        };

        return view('courses', ["isAuthenticated" => true, "isEnrollmentExists" => $isEnrollmentExists, "enroll_list" => $enroll_list, "course_url" => $goToSelectedCourse]);
    }
    public function enrollCourse(Request $request){
        $courseId = $request->query('course_id');

        if(!$courseId){
            return response(["message" => "incorrect query params"], 409);
        }
        $selected_course = $this->getCourseWithId($courseId);

        if($selected_course === null){
            return response(["message" => "course not found"], 404);
        }

        // if($this->getUserCourseList()->where("course_name", $selected_course->name)->exists()){
        //     return response(["message" => "you already enroll this course"], 409);
        // }

        Enrollment::create([
            "user_id" => 1,
            "course_id" => $selected_course->id,
            "enrollmentdate" =>  now()->setTimezone('GMT')->toDateString()
        ]);

        
        $course_route = (str_replace(" ", "-", strtolower($selected_course->name)));
        return redirect("my-courses/{$course_route}");

    
    }

    public function getAllUserCourses(){
        return Enrollment::all()->toArray();
    }

    public function getUserEnrollment(){
        $user = Auth::user();
        // return Enrollment::where("user_id", $user->id);

        return Enrollment::where("user_id", $user->id)->get(["course_id"]);
    }

    public function getUserCourseList(){
        return $this->getUserEnrollment()->course();
    }

    public function getCourseWithId($course_id){
        return Course::where("id", $course_id)->first();
    }

    public function lessonFinishedPercentage($course_id){
 
        $lesson_amount = Lesson::where('course_id', $course_id)->count();
        $counter = 0;
        $lessons = Lesson::whereHas('StudentLesson', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->get();
      
        foreach($lessons as $lesson){
            if($lesson->course->id === $course_id->id){
                $counter += 1;
            }
        }

        return ( $counter / $lesson_amount ) * 100;
        
        
    }

    public function finishLesson(Request $request){
        $lesson_id = $request->query('id');

        if(!Lesson::where('id', $lesson_id)->exists()){
            return response(["Message" => "Lesson Not Found", 409]);
        }

        StudentLesson::create([
            "user_id" => 1,
            "lesson_id" => $lesson_id,
            "completed_date" => now()->setTimezone('GMT')->toDateString()
        ]);

        return response(["Message" => "Success", 200]);


    }

    public function courseMainPage($slug){

        $course_id = Course::where("name", Str::title(str_replace('-', ' ', $slug)))->first(["id"]);

        dd($course_id);
        $finishedPercentage = $this->lessonFinishedPercentage($course_id);

        return dd("URAA");
        // return view('my-courses.' . $slug, ["percentage" => $finishedPercentage]);
    }

  
  
}
