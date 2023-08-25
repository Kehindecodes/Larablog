<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);


// show form to create a new post
Route::get('/posts/create', [PostController::class, 'create']);

// store a new post
Route::post('/posts', [PostController::class, 'store']);

// show a single post using the slug
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');




// show form to register
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// store a new user
Route::post('/users', [UserController::class, 'store']);
