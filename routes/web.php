<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/apply', function () {
    return view('apply');
})->name('apply');
Route::get('/instructor', function () {
    return view('instructor');
})->name('instructor');
Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');
Route::get('/courses', function () {
    return view('courses');
})->name('courses');
Route::get('/courses/C_language', function () {
    return view('courses.C_language');
})->name('courses.C_language');
Route::get('/courses/ChatGPT', function () {
    return view('courses.ChatGPT');
})->name('courses.ChatGPT');
Route::get('/courses/Digital_Marketing', function () {
    return view('courses.Digital_Marketing');
})->name('courses.Digital_Marketing');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/courses/E_Commerce', function () {
    return view('courses.E_Commerce');
})->name('courses.E_Commerce');
Route::get('/courses/Office_Management', function () {
    return view('courses.Office_Management');
})->name('courses.Office_Management');
Route::get('/courses/trading', function () {
    return view('courses.trading');
})->name('courses.trading');
Route::get('/courses/web_designing', function () {
    return view('courses.web_designing');
})->name('courses.web_designing');

Route::post('/admission/submit', [PageController::class, 'submit'])->name('admission.submit');
Route::post('/instructor/apply', [PageController::class, 'apply'])->name('instructor.apply');
Route::post('/contact/submit', [PageController::class, 'submitContact'])->name('contact.submit');
