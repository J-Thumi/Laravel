<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;


Route::get('/posts',[PostsController::class,'index'])->name('posts.index');


Route::post('/posts',[PostsController::class,'store'])->name('posts.store');

Route::get('/posts/create',[PostsController::class,'create'])->name('posts.create');

Route::delete('/posts/{id}',[PostsController::class,'destroy'])->name('posts.destroy');


Route::get('/posts/{id}',[PostsController::class,'show'])->name('posts.show');

Route::get('/posts/{post_id}/comments',[CommentsController::class,'index'])->name('comments.index');



Route::get('/posts/{post_id}/comments/create',[CommentsController::class,'create'])->name('comments.create');

Route::post('posts/{post_id}/comments',[CommentsController::class,'store'])->name('comments.store');

Route::get('/posts/{post_id}/comments/{author_id}',[CommentsController::class,'show'])->name('comments.show');

Route::delete('posts/{post_id}/comments/{id}',[CommentsController::class,'destroy'])->name('comments.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
