<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/api-documentation', [PageController::class, 'apiDocumentation'])->name('api.documentation');

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/type/{type}', [PostController::class, 'showByType']);
Route::get('post/{id}', [PostController::class, 'show'])->name('show');

