<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
Route::get('books/create',[BooksController::class,'create'])->name('books.create');
Route::get('/books',[BooksController::class,'index'])->name('books.index');
Route::get('/books/{id}',[BooksController::class,'show'])->name('books.show');
Route::post('/books',[BooksController::class,'store'])->name('books.store');

Route::delete('books/{id}',[BooksController::class,'destroy'])->name('books.destroy');

