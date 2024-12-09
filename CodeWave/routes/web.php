<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/test-api', [CourseController::class, 'lessonFinishedPercentage']);
Route::get('/', [DashboardController::class, 'dashboard'])
->name('index');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/submit', [AuthController::class, 'submitRegistration'])->name('submitRegistration');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('submitLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


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
});

Route::view('/my-courses', 'my-courses')->name('my-courses');

Route::get('/courses/python', function () {
    return view('courses.python');
});

Route::get('/news1', function () {
    return view('news.news1');
});

Route::get('/courses/python/python-for-beginners', function () {
    return view('courses.python.python-for-beginners');
});

Route::get('/announcements/announcement1', function () {
    return view('announcement.announcement1');
});

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
        abort(404); // Show 404 error if ID doesn't exist
    }

    return response()->view('inbox.inboxmessage', [
        'notification' => $notifications[$id]
    ]);
});

Route::get('/my-courses/python-for-beginners', function () {
    return view('my-courses.python-for-beginners');
});

Route::get('/my-courses/python-for-beginners?id=PFB01', function () {
    return view('my-courses.python-for-beginners.chapter-1');
})->name("python_course_1");

Route::get('/my-courses/python-for-beginners?id=PFB02', function () {
    return view('my-courses.python-for-beginners.chapter-2');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile', [UserController::class, 'profile'])
    ->name('profile')
    ->middleware('auth');

Route::get('/courses', [CourseController::class, 'coursePage'])->name("courses");


Route::get('/api/courses/', [CourseController::class, 'enrollCourse']);