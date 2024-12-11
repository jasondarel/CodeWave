<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Enrollment;
use App\Models\StudentLesson;
use App\Models\UserPerk;
use Illuminate\Support\Facades\Auth;
use Error;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    private $userController;
    private $courseController;
    function __construct() {
        $this->userController = new UserController();
        $this->courseController = new CourseController();
    }

    public function MarkChapter($lesson_id){

        if(StudentLesson::where(["lesson_id" => strtoupper($lesson_id), "user_id" => Auth::user()->id])->exists()){
            return;
        }
        
        else{
            StudentLesson::create([
                "user_id" => Auth::user()->id,
                "lesson_id" => $lesson_id,
                "completed_date" => now()->setTimezone('GMT')->toDateString(),
            ]);

            $this->userController->updateUserPoints(20);
            
            return;
        }
    }
    public function LessonPage($course_group , $slug){
        return view('courses'.".".$course_group.".".$slug);
    }

    

    public function LessonMainPage($course_group, $lesson_id){
        $mark_chapter = function () use($lesson_id, $course_group) {
            $lessons_amount = Lesson::where('id', 'LIKE', $course_group.'%')->count();
            $this->MarkChapter(strtoupper($lesson_id));
            if((int)$lesson_id[strlen($lesson_id) - 1] === $lessons_amount){
                return 'my-courses/';
            }
           

            $prefix = substr($lesson_id, 0, -2); 
            $number = (int)substr($lesson_id, -2); 

            $updatedString = $prefix . str_pad($number + 1, 2, '0', STR_PAD_LEFT);
            return('lessons/'.$course_group."/". $updatedString);
        };
        return view('my-courses'.".".$course_group.".".$lesson_id, ["mark_chapter" => $mark_chapter]);
    }
}
