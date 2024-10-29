<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

// Remove the conflicting /contact route
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/send', [ContactController::class, 'sendMail'])->name('contact.send');
