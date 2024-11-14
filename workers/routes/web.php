<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkersController;

Route::get('/workers',[WorkersController::class,'index']);

Route::post('/workers',[WorkersController::class,'store']);

Route::get('/workers/create',[WorkersController::class,'create']);