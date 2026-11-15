<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

// Route::get('/', fn() => Inertia::render('Welcome'));
Route::get('/home', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'));
Route::get('/layout', fn() => view('layout'));
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/about', [AboutController::class, 'index']);
Route::get('/admin/classroom', [ClassroomController::class, 'index'])->name('admin.classrooms.index');
Route::get('/admin/classroom/create', [ClassroomController::class, 'create'])->name('admin.classrooms.create');
Route::post('/admin/classroom', [ClassroomController::class, 'store'])->name('admin.classrooms.store');
Route::get('/admin/subjects', [SubjectController::class, 'index'])->name('admin.subjects.index');
Route::get('/admin/subjects/create', [SubjectController::class, 'create'])->name('admin.subjects.create');
Route::post('/admin/subjects', [SubjectController::class, 'store'])->name('admin.subjects.store');
Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('admin.teachers.index');
Route::get('/admin/teachers/create', [TeacherController::class, 'create'])->name('admin.teachers.create');
Route::post('/admin/teachers', [TeacherController::class, 'store'])->name('admin.teachers.store');

Route::prefix('admin')->group(function () {
    Route::get('/student', [StudentController::class, 'index'])
        ->name('admin.students.index');
    Route::get('/student/create', [StudentController::class, 'create'])
        ->name('admin.students.create');
    Route::post('/student', [StudentController::class, 'store'])
        ->name('admin.students.store');
});
