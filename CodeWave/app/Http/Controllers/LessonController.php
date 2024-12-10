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
    private UserController $userController = new UserController();

    public function MarkChapter($lesson_id){
        if(StudentLesson::where(["lesson_id", "user_id", [$lesson_id, Auth::user()->id]])->exists()){
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
    public function LessonPage($slug){
        $lesson_id = $slug;

        $this->MarkChapter($lesson_id);

        return view("lesson-" . $lesson_id);
    }
}
