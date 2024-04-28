<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentParentController;
use Illuminate\Support\Facades\Route;


// Route::group(['prefix' => '/student', 'as' => 'student.'], function () {
//     Route::get('/login', [StudentController::class, 'create'])->name('login');
// });
// Route::get('/student/{student:date_of_birth}/name', [StudentController::class, 'show'])->name('student.show.name');
Route::resource('student-parents', StudentParentController::class);
