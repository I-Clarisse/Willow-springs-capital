<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

use App\Http\Controllers\TestimonialController;

Route::get('/', [TestimonialController::class, 'mainPage']);

