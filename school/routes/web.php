<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::post('/students',[StudentsController::class,'store'])->name('students.store');
Route::get('/students',[StudentsController::class,'index'])->name('students.index');

Route::get('/students/create',[StudentsController::class,'create'])->name('students.create');



Route::get('students/{id}',[StudentsController::class,'show'])->name('students.show');

Route::delete('students/{id}',[StudentsController::class,'destroy'])->name('students.destroy');


