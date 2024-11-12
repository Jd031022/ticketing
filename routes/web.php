<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::post('/login', function () {
    return redirect('/landing');
});

// Add route for the landing page
Route::get('/landing', function () {
    return view('landing');
});