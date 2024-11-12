<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeopleController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/names', [PeopleController::class, 'names']);

Route::get('/query', [PeopleController::class, 'query']);

Route::get('/route/{index}', [PeopleController::class, 'single']);
