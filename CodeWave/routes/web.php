<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomepage');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/login', function () {
    return view('loginpage');
});

Route::get('/register', function () {
    return view('registerpage');
});
