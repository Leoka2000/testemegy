<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::view('student/create', 'students.create-student')
    ->middleware(['auth'])
    ->name('students.create-student');

    Route::view('student/list', 'students.pages.all-students')
    ->middleware(['auth'])
    ->name('students.pages.all-students');


require __DIR__.'/auth.php';
