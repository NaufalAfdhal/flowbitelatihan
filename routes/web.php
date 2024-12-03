<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DepartmentAdminController;
use App\Http\Controllers\Gradecontroller;
use App\Http\Controllers\GradeAdmincontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentAdminController;

// Route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route for the home page
Route::get('/home', [HomeController::class, 'index']);

// Route for the contact page
Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/grade', [Gradecontroller::class, 'index']);
Route::get('/grades-admin', [GradeAdmincontroller::class, 'index']);

Route::get('/department', [DepartmentController::class, 'index']);
Route::get('/departments-admin', [DepartmentAdminController::class, 'index']);

// Route to display the student list
Route::get('/student', [StudentController::class, 'student'])->name('student');

Route::get('/student-admin', [StudentAdminController::class, 'index']);

// Route to show the form for creating a new student
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');

// Route to handle the form submission for storing a new student
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

