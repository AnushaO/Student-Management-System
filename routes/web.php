<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;
use App\Http\controllers\TeacherController;
use App\Http\controllers\CourseController;
use App\Http\controllers\BatchController;



Route::get('/', function () {
    return view('layout');
});


Route::resource("/student", StudentController::class);
Route::resource("/teacher", TeacherController::class);

Route::resource("/courses", CourseController::class);

Route::resource("/batches", BatchController::class);