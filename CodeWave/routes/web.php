<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Middleware untuk user yang sudah login
Route::middleware('auth')->group(function () {
    Route::get('/inbox', function () {
        return response()->view('inbox', [
            'notifications' => [
                [
                    'title' => 'Successfully Enrolled',
                    'message' => 'You have successfully enrolled in the "Intro to JavaScript" course.',
                    'date' => 'December 4, 2024, 10:30 AM',
                ],
                [
                    'title' => 'Course Completed',
                    'message' => 'You have completed the "Advanced Python Programming" course.',
                    'date' => 'December 3, 2024, 2:15 PM',
                ],
                [
                    'title' => 'New Lesson Available',
                    'message' => 'A new lesson on "React State Management" is available in your course.',
                    'date' => 'December 2, 2024, 8:00 PM',
                ],
            ]
        ]);
    })->name('inbox');

    // Halaman My Courses
    Route::view('/my-courses', 'my-courses')->name('my-courses');

    // Detail Python Course
    Route::get('/courses/python', function () {
        return view('courses.python');
    })->name('courses.python');

    // Profile dengan locale opsional
    Route::get('/profile/{locale?}', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');

    // Halaman daftar courses
    Route::get('/courses', function () {
        return view('courses');
    })->name('courses');

    Route::get('api/courses', [CourseController::class, 'enrollCourses']);

    Route::get('api/lesson/finish', [CourseController::class, "finishLesson"]);

    Route::get('api/lesson/percentage', [CourseController::class, "lessonFinishedPercentage"]);
    
    Route::get('/news1', function () {
        return view('news.news1');
    })->name('news1');

    Route::get('/courses/python/python-for-beginners', function () {
        return view('courses.python.python-for-beginners');
    })->name('courses.python.beginner');

    Route::get('/announcements/announcement1', function () {
        return view('announcement.announcement1');
    })->name('announcement1');

    Route::get('/inbox/{id}', function ($id) {
        $notifications = [
            1 => [
                'title' => 'Successfully Enrolled',
                'message' => 'You have successfully enrolled in the "Intro to JavaScript" course.',
                'date' => 'December 4, 2024, 10:30 AM',
            ],
            2 => [
                'title' => 'Course Completed',
                'message' => 'You have completed the "Advanced Python Programming" course.',
                'date' => 'December 3, 2024, 2:15 PM',
            ],
            3 => [
                'title' => 'New Lesson Available',
                'message' => 'A new lesson on "React State Management" is available in your course.',
                'date' => 'December 2, 2024, 8:00 PM',
            ],
        ];

        if (!array_key_exists($id, $notifications)) {
            abort(404); // Notifikasi tidak ditemukan
        }

        return response()->view('inbox.inboxmessage', [
            'notification' => $notifications[$id]
        ]);
    })->name('inbox.detail');

    Route::get('/my-courses/python-for-beginners', function () {
        return view('my-courses.python-for-beginners');
    })->name('my-courses.python-beginner');

    Route::get('/my-courses/python-for-beginners/chapter-1', function () {
        return view('my-courses.python-for-beginners.chapter-1');
    })->name('my-courses.python-beginner.chapter-1');

    Route::get('/my-courses/python-for-beginners/chapter-2', function () {
        return view('my-courses.python-for-beginners.chapter-2');
    })->name('my-courses.python-beginner.chapter-2');
});

// Middleware untuk guest (belum login)
Route::middleware('guest')->group(function () {
    // Halaman register dengan locale opsional
    Route::get('/register/{locale?}', [AuthController::class, 'register'])->name('register');
    Route::post('/register/submit', [AuthController::class, 'submitRegistration'])->name('submitRegistration');
    // Halaman login dengan locale opsional
    Route::get('/login/{locale?}', [AuthController::class, 'login'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('submitLogin');
});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman About Us
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

// Halaman Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Halaman Index (default dashboard)
Route::get('/', [DashboardController::class, 'dashboard'])->name('index');



