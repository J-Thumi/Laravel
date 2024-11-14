<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;


Route::get('/', [CarsController::class,'home']);


Route::get('/cars',[CarsController::class,"index"]);


Route::get('/car/{id}',[CarsController::class,'show']);


Route::post('/cars', [CarsController::class, 'store']); 

Route::get('/cars/create', [CarsController::class, 'create']); // For displaying the form
