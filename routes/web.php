<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::get('/', [PostController::class, 'index']);


// show form to create a new post
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

// store a new post
Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');






// show form to register
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// store a new user
Route::post('/users', [UserController::class, 'store']);


Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show form to login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// show login
Route::get('/login', [UserController::class, 'login'])->name('login');


// login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
