<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Route::get('/inbox', function () {
    //     return response()->view('inbox', [
    //         'notifications' => [
    //             [
    //                 'title' => 'Successfully Enrolled',
    //                 'message' => 'You have successfully enrolled in the "Intro to JavaScript" course.',
    //                 'date' => 'December 4, 2024, 10:30 AM',
    //             ],
    //             [
    //                 'title' => 'Course Completed',
    //                 'message' => 'You have completed the "Advanced Python Programming" course.',
    //                 'date' => 'December 3, 2024, 2:15 PM',
    //             ],
    //             [
    //                 'title' => 'New Lesson Available',
    //                 'message' => 'A new lesson on "React State Management" is available in your course.',
    //                 'date' => 'December 2, 2024, 8:00 PM',
    //             ],
    //         ]
    //     ]);
    // })->name('inbox');

    Route::get('/inbox', [InboxController::class, 'mainInboxView'])->name('inbox');

    // Halaman My Courses
    Route::get('/my-courses', [CourseController::class, 'myCoursesView'])->name('my-courses');

    Route::get('/profile/{locale?}', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');


    Route::get('api/courses', [CourseController::class, 'enrollCourse']);


    Route::get('api/mark_as_read/{id}', [InboxController::class, 'markAsRead']);
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
    Route::get('/enroll/{id}', [CourseController::class, 'enrollCourse']);

    Route::get('/announcements/announcement1', function () {
        return view('announcement.announcement1');
    })->name('announcement1');

    Route::get('/inbox/{id}', [InboxController::class, 'notificationView']);
    // Route::get('/inbox/{id}', function ($id) {
    //     $notifications = [
    //         1 => [
    //             'title' => 'Successfully Enrolled',
    //             'message' => 'You have successfully enrolled in the "Intro to JavaScript" course.',
    //             'date' => 'December 4, 2024, 10:30 AM',
    //         ],
    //         2 => [
    //             'title' => 'Course Completed',
    //             'message' => 'You have completed the "Advanced Python Programming" course.',
    //             'date' => 'December 3, 2024, 2:15 PM',
    //         ],
    //         3 => [
    //             'title' => 'New Lesson Available',
    //             'message' => 'A new lesson on "React State Management" is available in your course.',
    //             'date' => 'December 2, 2024, 8:00 PM',
    //         ],
    //     ];

    //     if (!array_key_exists($id, $notifications)) {
    //         abort(404); // Notifikasi tidak ditemukan
    //     }

    //     return response()->view('inbox.inboxmessage', [
    //         'notification' => $notifications[$id]
    //     ]);
    // })->name('inbox.detail');

    Route::get('/lessons/{course_group}/{lesson_id}', [LessonController::class, "LessonMainPage"]);
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

// Halaman Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Halaman Index (default dashboard)
Route::get('/', [DashboardController::class, 'dashboard'])->name('index');



Route::get('/api/testt', [CourseController::class, "testAPI"]);

Route::get('/courses', [CourseController::class, 'courseListPage'])->name('courses');


Route::get('/courses/{course_group}/{slug}', [LessonController::class, 'LessonPage']);
//python

Route::get('/courses/python', [CourseController::class, 'pythonListPage'])->name('courses.python');
Route::get('/courses/java', [CourseController::class, 'javaListPage'])->name('courses.java');
Route::get('/courses/javascript', [CourseController::class, 'javascriptListPage'])->name('courses.javascript');




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

//oopij
Route::get('/my-courses/oopij/oopij01', function () {
    return view('my-courses.oopij.oopij01');
})->name('my-courses.oopij.oopij01');

Route::get('/my-courses/oopij/oopij02', function () {
    return view('my-courses.oopij.oopij02');
})->name('my-courses.oopij.oopij02');

Route::get('/my-courses/oopij/oopij03', function () {
    return view('my-courses.oopij.oopij03');
})->name('my-courses.oopij.oopij03');

Route::get('/my-courses/oopij/oopij04', function () {
    return view('my-courses.oopij.oopij04');
})->name('my-courses.oopij.oopij04');

Route::get('/my-courses/oopij/oopij05', function () {
    return view('my-courses.oopij.oopij05');
})->name('my-courses.oopij.oopij05');

//sfb
Route::get('/my-courses/sfb/sfb01', function () {
    return view('my-courses.sfb.sfb01');
})->name('my-courses.sfb.sfb01');

Route::get('/my-courses/sfb/sfb02', function () {
    return view('my-courses.sfb.sfb02');
})->name('my-courses.sfb.sfb02');

Route::get('/my-courses/sfb/sfb03', function () {
    return view('my-courses.sfb.sfb03');
})->name('my-courses.sfb.sfb03');

Route::get('/my-courses/sfb/sfb04', function () {
    return view('my-courses.sfb.sfb04');
})->name('my-courses.sfb.sfb04');

Route::get('/my-courses/sfb/sfb05', function () {
    return view('my-courses.sfb.sfb05');
})->name('my-courses.sfb.sfb05');

//app
Route::get('/my-courses/app/app01', function () {
    return view('my-courses.app.app01');
})->name('my-courses.app.app01');

Route::get('/my-courses/app/app02', function () {
    return view('my-courses.app.app02');
})->name('my-courses.app.app02');

Route::get('/my-courses/app/app03', function () {
    return view('my-courses.app.app03');
})->name('my-courses.app.app03');

Route::get('/my-courses/app/app04', function () {
    return view('my-courses.app.app04');
})->name('my-courses.app.app04');

Route::get('/my-courses/app/app05', function () {
    return view('my-courses.app.app05');
})->name('my-courses.app.app05');


//dawp
Route::get('/my-courses/dawp/dawp01', function () {
    return view('my-courses.dawp.dawp01');
})->name('my-courses.dawp.dawp01');

Route::get('/my-courses/dawp/dawp02', function () {
    return view('my-courses.dawp.dawp02');
})->name('my-courses.dawp.dawp02');

Route::get('/my-courses/dawp/dawp03', function () {
    return view('my-courses.dawp.dawp03');
})->name('my-courses.dawp.dawp03');

Route::get('/my-courses/dawp/dawp04', function () {
    return view('my-courses.dawp.dawp04');
})->name('my-courses.dawp.dawp04');

Route::get('/my-courses/dawp/dawp05', function () {
    return view('my-courses.dawp.dawp05');
})->name('my-courses.dawp.dawp05');




//dvwp
Route::get('/my-courses/dvwp/dvwp01', function () {
    return view('my-courses.dvwp.dvwp01');
})->name('my-courses.dvwp.dvwp01');

Route::get('/my-courses/dvwp/dvwp02', function () {
    return view('my-courses.dvwp.dvwp02');
})->name('my-courses.dvwp.dvwp02');

Route::get('/my-courses/dvwp/dvwp03', function () {
    return view('my-courses.dvwp.dvwp03');
})->name('my-courses.dvwp.dvwp03');

Route::get('/my-courses/dvwp/dvwp04', function () {
    return view('my-courses.dvwp.dvwp04');
})->name('my-courses.dvwp.dvwp04');

Route::get('/my-courses/dvwp/dvwp05', function () {
    return view('my-courses.dvwp.dvwp05');
})->name('my-courses.dvwp.dvwp05');



//itf
Route::get('/my-courses/itf/itf01', function () {
    return view('my-courses.itf.itf01');
})->name('my-courses.itf.itf01');

Route::get('/my-courses/itf/itf02', function () {
    return view('my-courses.itf.itf02');
})->name('my-courses.itf.itf02');

Route::get('/my-courses/itf/itf03', function () {
    return view('my-courses.itf.itf03');
})->name('my-courses.itf.itf03');

Route::get('/my-courses/itf/itf04', function () {
    return view('my-courses.itf.itf04');
})->name('my-courses.itf.itf04');

Route::get('/my-courses/itf/itf05', function () {
    return view('my-courses.itf.itf05');
})->name('my-courses.itf.itf05');



//pfa
Route::get('/my-courses/pfa/pfa01', function () {
    return view('my-courses.pfa.pfa01');
})->name('my-courses.pfa.pfa01');

Route::get('/my-courses/pfa/pfa02', function () {
    return view('my-courses.pfa.pfa02');
})->name('my-courses.pfa.pfa02');

Route::get('/my-courses/pfa/pfa03', function () {
    return view('my-courses.pfa.pfa03');
})->name('my-courses.pfa.pfa03');

Route::get('/my-courses/pfa/pfa04', function () {
    return view('my-courses.pfa.pfa04');
})->name('my-courses.pfa.pfa04');

Route::get('/my-courses/pfa/pfa05', function () {
    return view('my-courses.pfa.pfa05');
})->name('my-courses.pfa.pfa05');





//pfc
Route::get('/my-courses/pfc/pfc01', function () {
    return view('my-courses.pfc.pfc01');
})->name('my-courses.pfc.pfc01');

Route::get('/my-courses/pfc/pfc02', function () {
    return view('my-courses.pfc.pfc02');
})->name('my-courses.pfc.pfc02');

Route::get('/my-courses/pfc/pfc03', function () {
    return view('my-courses.pfc.pfc03');
})->name('my-courses.pfc.pfc03');

Route::get('/my-courses/pfc/pfc04', function () {
    return view('my-courses.pfc.pfc04');
})->name('my-courses.pfc.pfc04');

Route::get('/my-courses/pfc/pfc05', function () {
    return view('my-courses.pfc.pfc05');
})->name('my-courses.pfc.pfc05');




//pfgd
Route::get('/my-courses/pfgd/pfgd01', function () {
    return view('my-courses.pfgd.pfgd01');
})->name('my-courses.pfgd.pfgd01');

Route::get('/my-courses/pfgd/pfgd02', function () {
    return view('my-courses.pfgd.pfgd02');
})->name('my-courses.pfgd.pfgd02');

Route::get('/my-courses/pfgd/pfgd03', function () {
    return view('my-courses.pfgd.pfgd03');
})->name('my-courses.pfgd.pfgd03');

Route::get('/my-courses/pfgd/pfgd04', function () {
    return view('my-courses.pfgd.pfgd04');
})->name('my-courses.pfgd.pfgd04');

Route::get('/my-courses/pfgd/pfgd05', function () {
    return view('my-courses.pfgd.pfgd05');
})->name('my-courses.pfgd.pfgd05');



//pfml
Route::get('/my-courses/pfml/pfml01', function () {
    return view('my-courses.pfml.pfml01');
})->name('my-courses.pfml.pfml01');

Route::get('/my-courses/pfml/pfml02', function () {
    return view('my-courses.pfml.pfml02');
})->name('my-courses.pfml.pfml02');

Route::get('/my-courses/pfml/pfml03', function () {
    return view('my-courses.pfml.pfml03');
})->name('my-courses.pfml.pfml03');

Route::get('/my-courses/pfml/pfml04', function () {
    return view('my-courses.pfml.pfml04');
})->name('my-courses.pfml.pfml04');

Route::get('/my-courses/pfml/pfml05', function () {
    return view('my-courses.pfml.pfml05');
})->name('my-courses.pfml.pfml05');




//wdwd
Route::get('/my-courses/wdwd/wdwd01', function () {
    return view('my-courses.wdwd.wdwd01');
})->name('my-courses.wdwd.wdwd01');

Route::get('/my-courses/wdwd/wdwd02', function () {
    return view('my-courses.wdwd.wdwd02');
})->name('my-courses.wdwd.wdwd02');

Route::get('/my-courses/wdwd/wdwd03', function () {
    return view('my-courses.wdwd.wdwd03');
})->name('my-courses.wdwd.wdwd03');

Route::get('/my-courses/wdwd/wdwd04', function () {
    return view('my-courses.wdwd.wdwd04');
})->name('my-courses.wdwd.wdwd04');

Route::get('/my-courses/wdwd/wdwd05', function () {
    return view('my-courses.wdwd.wdwd05');
})->name('my-courses.wdwd.wdwd05');


//javascript

// Route::get('/courses/javascript', function () {
//     return view('courses.javascript');
// })->name('courses.javascript');

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



//fdwr
Route::get('/my-courses/fdwr/fdwr01', function () {
    return view('my-courses.fdwr.fdwr01');
})->name('my-courses.fdwr.fdwr01');

Route::get('/my-courses/fdwr/fdwr02', function () {
    return view('my-courses.fdwr.fdwr02');
})->name('my-courses.fdwr.fdwr02');

Route::get('/my-courses/fdwr/fdwr03', function () {
    return view('my-courses.fdwr.fdwr03');
})->name('my-courses.fdwr.fdwr03');

Route::get('/my-courses/fdwr/fdwr04', function () {
    return view('my-courses.fdwr.fdwr04');
})->name('my-courses.fdwr.fdwr04');

Route::get('/my-courses/fdwr/fdwr05', function () {
    return view('my-courses.fdwr.fdwr05');
})->name('my-courses.fdwr.fdwr05');




//fsdwn
Route::get('/my-courses/fsdwn/fsdwn01', function () {
    return view('my-courses.fsdwn.fsdwn01');
})->name('my-courses.fsdwn.fsdwn01');

Route::get('/my-courses/fsdwn/fsdwn02', function () {
    return view('my-courses.fsdwn.fsdwn02');
})->name('my-courses.fsdwn.fsdwn02');

Route::get('/my-courses/fsdwn/fsdwn03', function () {
    return view('my-courses.fsdwn.fsdwn03');
})->name('my-courses.fsdwn.fsdwn03');

Route::get('/my-courses/fsdwn/fsdwn04', function () {
    return view('my-courses.fsdwn.fsdwn04');
})->name('my-courses.fsdwn.fsdwn04');

Route::get('/my-courses/fsdwn/fsdwn05', function () {
    return view('my-courses.fsdwn.fsdwn05');
})->name('my-courses.fsdwn.fsdwn05');

Route::get('/my-courses/fsdwn/fsdwn06', function () {
    return view('my-courses.fsdwn.fsdwn06');
})->name('my-courses.fsdwn.fsdwn06');



//je
Route::get('/my-courses/je/je01', function () {
    return view('my-courses.je.je01');
})->name('my-courses.je.je01');

Route::get('/my-courses/je/je02', function () {
    return view('my-courses.je.je02');
})->name('my-courses.je.je02');

Route::get('/my-courses/je/je03', function () {
    return view('my-courses.je.je03');
})->name('my-courses.je.je03');

Route::get('/my-courses/je/je04', function () {
    return view('my-courses.je.je04');
})->name('my-courses.je.je04');

Route::get('/my-courses/je/je05', function () {
    return view('my-courses.je.je05');
})->name('my-courses.je.je05');



//jfwd
Route::get('/my-courses/jfwd/jfwd01', function () {
    return view('my-courses.jfwd.jfwd01');
})->name('my-courses.jfwd.jfwd01');

Route::get('/my-courses/jfwd/jfwd02', function () {
    return view('my-courses.jfwd.jfwd02');
})->name('my-courses.jfwd.jfwd02');

Route::get('/my-courses/jfwd/jfwd03', function () {
    return view('my-courses.jfwd.jfwd03');
})->name('my-courses.jfwd.jfwd03');

Route::get('/my-courses/jfwd/jfwd04', function () {
    return view('my-courses.jfwd.jfwd04');
})->name('my-courses.jfwd.jfwd04');

Route::get('/my-courses/jfwd/jfwd05', function () {
    return view('my-courses.jfwd.jfwd05');
})->name('my-courses.jfwd.jfwd05');





//nfbd
Route::get('/my-courses/nfbd/nfbd01', function () {
    return view('my-courses.nfbd.nfbd01');
})->name('my-courses.nfbd.nfbd01');

Route::get('/my-courses/nfbd/nfbd02', function () {
    return view('my-courses.nfbd.nfbd02');
})->name('my-courses.nfbd.nfbd02');

Route::get('/my-courses/nfbd/nfbd03', function () {
    return view('my-courses.nfbd.nfbd03');
})->name('my-courses.nfbd.nfbd03');

Route::get('/my-courses/nfbd/nfbd04', function () {
    return view('my-courses.nfbd.nfbd04');
})->name('my-courses.nfbd.nfbd04');

Route::get('/my-courses/nfbd/nfbd05', function () {
    return view('my-courses.nfbd.nfbd05');
})->name('my-courses.nfbd.nfbd05');
