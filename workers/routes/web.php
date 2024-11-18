<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkersController;

Route::get('/workers',[WorkersController::class,'index'])->name('workers.index');

Route::post('/workers',[WorkersController::class,'store']);

Route::get('/workers/create',[WorkersController::class,'create']);

Route::get('/workers/{id}',[WorkersController::class,'show'])->name('workers.show');

Route::delete('workers/{id}',[WorkersController::class,'destroy'])->name('workers.destroy');