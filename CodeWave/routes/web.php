<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
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
    
    Route::get('/profile/{locale?}', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');

    Route::get('/courses', function () {
        return view('courses');
    });
});

Route::middleware('guest')->group(function (){
    

    Route::get('/register/{locale?}', [AuthController::class, 'register'])->name('register');
    Route::post('/register/submit', [AuthController::class, 'submitRegistration'])->name('submitRegistration');
    Route::get('/login/{locale?}', [AuthController::class, 'login'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('submitLogin');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/', function () {
    return view('dashboard');
})->name('index');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');