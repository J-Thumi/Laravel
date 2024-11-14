<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/songs',[SongsController::class,'show']);