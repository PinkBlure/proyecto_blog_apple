<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/api-documentation', [PageController::class, 'apiDocumentation'])->name('api.documentation');

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/type/{type}', [PostController::class, 'showByType']);
Route::get('post/{id}', [PostController::class, 'show'])->name('show');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/admin', [AdminController::class, 'index'])->name('admin');
