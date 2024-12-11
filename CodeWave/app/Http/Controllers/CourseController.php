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

    private $course_group = [
        "python" => [1, 10],
        "java" => [11, 15],
        "javascript" => [16, 20]
    ];

    private $inboxController;

    function __construct(){
        $this->inboxController = new InboxController();
    }


    public function isEnrollmentExists($enroll_list, $id){
        return $enroll_list->contains("course_id", $id);
    }

    public function redirectThroughCourse($id, $done){
        $selected_course = $this->getCourseWithId($id);

        if($done){
              $acronym = $this->getCourseAcronym($selected_course->name);
            return ('lessons/' .  $acronym . "/" . $acronym . "01");
        }

        $course_group = "";

        foreach ($this->course_group as $key => $range) {
            if ($selected_course->id >= $range[0] && $selected_course->id <= $range[1]) {
                $course_group = $key;

            }
        }
     
        return ("/courses/{$course_group}/" . $this->getCourseAcronym($selected_course->name));
    }

    public function pythonListPage(){
        $enroll_list = $this->getUserEnrollment();
      
        $isEnrollmentExists = function($id) use ($enroll_list) {
            return $this->isEnrollmentExists($enroll_list, $id);
        };

        $redirectThrough = function($id, $done) {
            return $this->redirectThroughCourse($id, $done);
        };

        return view('courses.python', ["isAuthenticated" => true, "isEnrollmentExists" => $isEnrollmentExists, "enroll_list" => $enroll_list, 'redirectThrough' => $redirectThrough]);
    }

    public function javaListPage(){
        $enroll_list = $this->getUserEnrollment();
      
        $isEnrollmentExists = function($id) use ($enroll_list) {
            return $this->isEnrollmentExists($enroll_list, $id);
        };

        $redirectThrough = function($id, $done) {
            return $this->redirectThroughCourse($id, $done);
        };

        return view('courses.java', ["isAuthenticated" => true, "isEnrollmentExists" => $isEnrollmentExists, "enroll_list" => $enroll_list, 'redirectThrough' => $redirectThrough]);
    }

    public function javascriptListPage(){
        $enroll_list = $this->getUserEnrollment();
      
        $isEnrollmentExists = function($id) use ($enroll_list) {
            return $this->isEnrollmentExists($enroll_list, $id);
        };

        $redirectThrough = function($id, $done) {
            return $this->redirectThroughCourse($id, $done);
        };

        return view('courses.javascript', ["isAuthenticated" => true, "isEnrollmentExists" => $isEnrollmentExists, "enroll_list" => $enroll_list, 'redirectThrough' => $redirectThrough]);
    }
    public function courseListPage(){

        // if(!Auth::user()){
        //     return view('courses', ["isAuthenticated" => false]);

        // }
        $enroll_list = $this->getUserEnrollment();
      
        $isEnrollmentExists = function($id) use ($enroll_list) {
            return $this->isEnrollmentExists($enroll_list, $id);
        };

        $redirectThrough = function($id, $done) {
            return $this->redirectThroughCourse($id, $done);
        };

        return view('courses', ["isAuthenticated" => true, "isEnrollmentExists" => $isEnrollmentExists, "enroll_list" => $enroll_list, 'redirectThrough' => $redirectThrough]);
    }

    public function enrollCourse($id){
        
        
        // if(Enrollment::where(['user_id' => Auth::user()->id, 'course_id' => $id])->exists()){
        //     return;
        // }
        $selected_course = $this->getCourseWithId($id);
     
        $acronym = $this->getCourseAcronym($selected_course->name);

        if($selected_course === null){
            return response(["message" => "course not found"], 404);
        }

        Enrollment::create([
            "user_id" => Auth::user()->id,
            "course_id" => $id,
            "enrollmentdate" =>  now()->setTimezone('GMT')->toDateString()
        ]);

        $this->inboxController->createNewNotification("Congratulations! You have successfully enrolled in course = " . Course::where("id", $id)->first()->name , "You Have Enrolled a Course");

        return redirect('lessons/' .  $acronym . "/" . $acronym . "01");

    }

    public function getCourseAcronym($name){
        return strtolower(implode('', array_map(fn($word) => $word[0], explode(' ', $name))));
    }
    public function getAllUserCourses(){
        return Enrollment::where("user_id", Auth::user()->id)->get()->toArray();
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
        $lessons = Lesson::whereHas('student_lessons', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->get();
      
        foreach($lessons as $lesson){
            if($lesson->course->id === $course_id){
           
                $counter += 1;
            }
        }

        if($counter === 0 || $lesson_amount === 0){
            return 0;
        }

        return number_format(( $counter / $lesson_amount ) * 100 , 2, '.', '');
        
        
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
    public function myCoursesView(Request $request){

        
        $query = $request->input('search');
        $getPercentages = function($id) {
            return $this->lessonFinishedPercentage($id);
        };

        

        if ($query) 
        {
            $userCourses = Course::whereHas('enrollments', function ($query) {
                $query->where('user_id', Auth::user()->id);
            })->where('name', 'LIKE', '%' . $query. '%')->get();
        }

        else{
            $userCourses = Course::whereHas('enrollments', function ($query) {
                $query->where('user_id', Auth::user()->id);
            })->get();
        }
        
        $redirectThrough = function($id) {
            return $this->redirectThroughCourse($id, true);
        };

   
        return view('my-courses', ["userCourses" => $userCourses, "percentage" => $getPercentages, "redirectTo" => $redirectThrough]);
    }


    

  
  
}
