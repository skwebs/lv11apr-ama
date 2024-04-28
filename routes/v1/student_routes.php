<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentParentController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/student', 'as' => 'student.'], function () {
    Route::get('/login', [StudentController::class, 'create'])->name('login');
});
// Students Routes
Route::get('/student/{student:date_of_birth}/name', [StudentController::class, 'show'])->name('student.show.name');
Route::get('/student/trashed', [StudentController::class, 'trashed'])->name('student.trashed');
Route::put('/student/{student}/restore', [StudentController::class, 'restore'])->withTrashed()->name('student.restore');
Route::delete('/student/{student}/delete', [StudentController::class, 'deleteForever'])->withTrashed()->name('student.deleteForever');
Route::resource('/student', StudentController::class);

// Parents Routes
// Route::resource('/student/parents', StudentParentController::class);
Route::get('/student/{student}/parents/add', [StudentParentController::class, 'create'])->name('student.parents.add');
