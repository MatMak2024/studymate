<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;



Route::resource('students', StudentsController::class);

Route::resource('courses', CourseController::class);

Route::resource('enrollments', EnrollmentsController::class);





Route::get('/', function () {
    return view('welcome');
})->name('home');


