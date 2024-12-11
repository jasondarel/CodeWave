<?php

namespace App\Http\Controllers;

use App\Models\UserPerk;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Enrollment;
use App\Models\StudentLesson;
use App\Models\Rank;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function dashboard()
    {
        // Paginated coding news
        $news = News::paginate(5); // Change pagination number if needed

        // Get user's enrollments and lessons
        $coursesEnrolled = Enrollment::where('user_id', auth()->id())->count();
        $lessonsCompleted = StudentLesson::where('user_id', auth()->id())->count();

        // Fetch the user's rank
        $rank = UserPerk::where('user_id', Auth::user()->id)->first()->rank->name;
       
        // Paginate announcements
        $announcements = Announcement::latest()->paginate(5); // Change pagination number if needed

        return view('dashboard', compact('news', 'coursesEnrolled', 'lessonsCompleted', 'rank', 'announcements'));
    }
}
