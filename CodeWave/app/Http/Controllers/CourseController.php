<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Auth;
use Error;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function enrollCourse(Request $request, $name){
        $selected_course = Course::where("name", $name)->first();
        if($selected_course === null){
            return response(["message" => "course not found"], 404);
        }

        if($this->getUserCourseList()->where("course_name", $selected_course->name)->exists()){
            return response(["message" => "you already enroll this course"], 409);
        }

        Enrollment::create([
            "user_id" => Auth::user()->id,
            "course_id" => $selected_course->id,
            "enrollment_date" =>  now()->setTimezone('GMT')->toDateString()
        ]);

        return response (["message" => "success"], 200);

    
    }

    public function getUserEnrollment(){
        $user = Auth::user();
        return Enrollment::where("user_id", $user->id);
    }

    public function getUserCourseList(){
        return $this->getUserEnrollment()->course();
    }

  
}
