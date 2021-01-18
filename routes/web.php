<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Post\PostsController;
use App\Http\Controllers\Like\PostLikeController;
use App\Http\Controllers\Post\UserPostController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::post('/posts', [PostsController::class, 'store']);
Route::delete('/posts/{post}', [PostsController::class, 'destroy'])->name('post.delete');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('post.show');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.like');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.like');