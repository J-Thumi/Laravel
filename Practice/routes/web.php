<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuldingsController;

Route::get('buldings',[BuldingsController::class,'index'])->name('buldings.index');
Route::post('buldings',[BuldingsController::class,'store'])->name('buldings.store');
Route::get('buldings/create',[BuldingsController::class,'create'])->name('buldings.create');
Route::get('buldings/{id}',[BuldingsController::class,'show'])->name('buldings.show');
Route::delete('buldings/{id}',[BuldingsController::class,'destroy'])->name('buldings.destroy');


