<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Enrollment;
use App\Models\StudentLesson;
use App\Models\Rank;
use App\Models\Announcement;

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
        $rank = Rank::where('user_id', auth()->id())->first()->name ?? 'No Rank';

        // Paginate announcements
        $announcements = Announcement::latest()->paginate(5); // Change pagination number if needed

        return view('dashboard', compact('news', 'coursesEnrolled', 'lessonsCompleted', 'rank', 'announcements'));
    }
}
