<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;



Route::get('/students',[StudentsController::class, 'index'])->middleware('auth');

Route::post('/students',[StudentsController::class,'store']);

Route::get('/students/create',[StudentsController::class,'create']);

Route::get('/students/{id}',[StudentsController::class,'show']);

Route::delete('/students/{id}',[StudentsController::class,'destroy']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
