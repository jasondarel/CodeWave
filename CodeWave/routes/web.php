<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomepage');
})->name('index');

Route::get('/aboutus', function () {
    return view('aboutus');
});



// Route::get('/login', function () {
//     return view('loginpage');
// });

// Route::get('/register', function () {
//     return view('registerpage');
// });


// register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/submit', [AuthController::class, 'submitRegistration'])->name('submitRegistration');
// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('submitLogin');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// Route::middleware('auth')->group(function (){

// });

// Route::middleware('guest')->group(function (){
    
// });