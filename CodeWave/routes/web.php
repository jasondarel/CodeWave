<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InboxController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('welcomepage');
})->name('index');

Route::get('/aboutus', function () {
    return view('aboutus');
});

// Authentication routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/submit', [AuthController::class, 'submitRegistration'])->name('submitRegistration');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('submitLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Inbox routes
Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
Route::get('/inbox/read/{id}', [InboxController::class, 'markAsRead'])->name('inbox.markAsRead');

// Test notification route (for testing only)
Route::get('/create-test-notification', function () {
    // Example: Create multiple dummy notifications for user with ID 1
    App\Models\Notification::create([
        'user_id' => 1,  // Change this to an existing user ID
        'title' => 'Test Notification 1',
        'content' => 'This is the first test notification to check the inbox.',
        'is_read' => false,  // Mark as unread
    ]);

    App\Models\Notification::create([
        'user_id' => 1,  // Change this to an existing user ID
        'title' => 'Test Notification 2',
        'content' => 'This is the second test notification to check the inbox.',
        'is_read' => false,  // Mark as unread
    ]);

    return "Test notifications created!";
});
