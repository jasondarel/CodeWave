<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

    Route::view('/my-courses', 'my-courses')->name('my-courses');

    Route::get('/profile/{locale?}', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');

    Route::get('/courses', [CourseController::class, 'courseListPage'])->name('courses');

    Route::get('api/courses', [CourseController::class, 'enrollCourse']);

    Route::get('api/lesson/finish', [CourseController::class, "finishLesson"]);

    Route::get('api/lesson/percentage', [CourseController::class, "lessonFinishedPercentage"]);

    // News

    Route::get('/news1', function () {
        return view('news.news1');
    })->name('news1');

    Route::get('/news2', function () {
        return view('news.news2');
    })->name('news2');

    Route::get('/news3', function () {
        return view('news.news3');
    })->name('news3');

    // 


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

    Route::get('/my-courses/{slug}', [CourseController::class, "courseMainPage"]);
    // Route::get('/my-courses/python-for-beginners', function () {
    //     return view('my-courses.python-for-beginners');
    // })->name('my-courses.python-beginner');

    // Route::get('/my-courses/python-for-beginners/chapter-1', function () {
    //     return view('my-courses.python-for-beginners.chapter-1');
    // })->name('my-courses.python-beginner.chapter-1');

    // Route::get('/my-courses/python-for-beginners/chapter-2', function () {
    //     return view('my-courses.python-for-beginners.chapter-2');
    // })->name('my-courses.python-beginner.chapter-2');
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



Route::get('/api/testt', [CourseController::class, "testAPI"]);




//python

Route::get('/courses/python', function () {
    return view('courses.python');
})->name('courses.python');

Route::get('/courses/python/python-for-beginners', function () {
    return view('courses.python.python-for-beginners');
})->name('courses.python.beginner');



//python for beginners
Route::get('/my-courses/python-for-beginners/pfb01', function () {
    return view('my-courses.python-for-beginners.pfb02');
})->name('my-courses.python-beginner.pfb02');

Route::get('/my-courses/python-for-beginners/pfb02', function () {
    return view('my-courses.python-for-beginners.pfb02');
})->name('my-courses.python-beginner.pfb02');

Route::get('/my-courses/python-for-beginners/pfb03', function () {
    return view('my-courses.python-for-beginners.pfb03');
})->name('my-courses.python-beginner.pfb03');

Route::get('/my-courses/python-for-beginners/pfb04', function () {
    return view('my-courses.python-for-beginners.pfb04');
})->name('my-courses.python-beginner.pfb04');

Route::get('/my-courses/python-for-beginners/pfb05', function () {
    return view('my-courses.python-for-beginners.pfb05');
})->name('my-courses.python-beginner.pfb05');

Route::get('/my-courses/python-for-beginners/pfb06', function () {
    return view('my-courses.python-for-beginners.pfb06');
})->name('my-courses.python-beginner.pfb06');

Route::get('/courses/python/dawp', function () {
    return view('courses.python.dawp');
})->name('courses.python.dawp');

Route::get('/courses/python/pfml', function () {
    return view('courses.python.pfml');
})->name('courses.python.pfml');

Route::get('/courses/python/app', function () {
    return view('courses.python.app');
})->name('courses.python.app');

Route::get('/courses/python/wdwd', function () {
    return view('courses.python.wdwd');
})->name('courses.python.wdwd');

Route::get('/courses/python/pfa', function () {
    return view('courses.python.pfa');
})->name('courses.python.pfa');

Route::get('/courses/python/pfgd', function () {
    return view('courses.python.pfgd');
})->name('courses.python.pfgd');

Route::get('/courses/python/itf', function () {
    return view('courses.python.itf');
})->name('courses.python.itf    ');

Route::get('/courses/python/pfc', function () {
    return view('courses.python.pfc');
})->name('courses.python.pfc');

Route::get('/courses/python/dvwp', function () {
    return view('courses.python.dvwp');
})->name('courses.python.dvwp');


//java

Route::get('/courses/java', function () {
    return view('courses.java');
})->name('courses.java');

Route::get('/courses/java/jffb', function () {
    return view('courses.java.jffb');
})->name('courses.java.jffb');

Route::get('/courses/java/oopij', function () {
    return view('courses.java.oopij');
})->name('courses.java.oopij');

Route::get('/courses/java/jfmd', function () {
    return view('courses.java.jfmd');
})->name('courses.java.jfmd');

Route::get('/courses/java/sfb', function () {
    return view('courses.java.sfb');
})->name('courses.java.sfb');

Route::get('/courses/java/jwdwsb', function () {
    return view('courses.java.jwdwsb');
})->name('courses.java.jwdwsb');


//jffb

Route::get('/my-courses/jffb/jffb01', function () {
    return view('my-courses.jffb.jffb01');
})->name('my-courses.jffb.jffb01');

Route::get('/my-courses/jffb/jffb02', function () {
    return view('my-courses.jffb.jffb02');
})->name('my-courses.jffb.jffb02');

Route::get('/my-courses/jffb/jffb03', function () {
    return view('my-courses.jffb.jffb03');
})->name('my-courses.jffb.jffb03');

Route::get('/my-courses/jffb/jffb04', function () {
    return view('my-courses.jffb.jffb04');
})->name('my-courses.jffb.jffb04');

Route::get('/my-courses/jffb/jffb05', function () {
    return view('my-courses.jffb.jffb05');
})->name('my-courses.jffb.jffb05');


//jfmd

Route::get('/my-courses/jfmd/jfmd01', function () {
    return view('my-courses.jfmd.jfmd01');
})->name('my-courses.jfmd.jfmd01');

Route::get('/my-courses/jfmd/jfmd02', function () {
    return view('my-courses.jfmd.jfmd02');
})->name('my-courses.jfmd.jfmd02');

Route::get('/my-courses/jfmd/jfmd03', function () {
    return view('my-courses.jfmd.jfmd03');
})->name('my-courses.jfmd.jfmd03');

Route::get('/my-courses/jfmd/jfmd04', function () {
    return view('my-courses.jfmd.jfmd04');
})->name('my-courses.jfmd.jfmd04');

Route::get('/my-courses/jfmd/jfmd05', function () {
    return view('my-courses.jfmd.jfmd05');
})->name('my-courses.jfmd.jfmd05');

//jwdwsb
Route::get('/my-courses/jwdwsb/jwdwsb01', function () {
    return view('my-courses.jwdwsb.jwdwsb01');
})->name('my-courses.jwdwsb.jwdwsb01');

Route::get('/my-courses/jwdwsb/jwdwsb02', function () {
    return view('my-courses.jwdwsb.jwdwsb02');
})->name('my-courses.jwdwsb.jwdwsb02');

Route::get('/my-courses/jwdwsb/jwdwsb03', function () {
    return view('my-courses.jwdwsb.jwdwsb03');
})->name('my-courses.jwdwsb.jwdwsb03');

Route::get('/my-courses/jwdwsb/jwdwsb04', function () {
    return view('my-courses.jwdwsb.jwdwsb04');
})->name('my-courses.jwdwsb.jwdwsb04');

Route::get('/my-courses/jwdwsb/jwdwsb05', function () {
    return view('my-courses.jwdwsb.jwdwsb05');
})->name('my-courses.jwdwsb.jwdwsb05');

//javascript

Route::get('/courses/javascript', function () {
    return view('courses.javascript');
})->name('courses.javascript');

Route::get('/courses/javascript/je', function () {
    return view('courses.javascript.je');
})->name('courses.javascript.je');

Route::get('/courses/javascript/jfwd', function () {
    return view('courses.javascript.jfwd');
})->name('courses.javascript.jfwd');

Route::get('/courses/javascript/fdwr', function () {
    return view('courses.javascript.fdwr');
})->name('courses.javascript.fdwr');

Route::get('/courses/javascript/nfbd', function () {
    return view('courses.javascript.nfbd');
})->name('courses.javascript.nfbd');

Route::get('/courses/javascript/fsdwn', function () {
    return view('courses.javascript.fsdwn');
})->name('courses.javascript.fsdwn');
