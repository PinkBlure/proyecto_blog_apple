<?php

use App\Http\Controllers\ApiPostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [ApiPostController::class, 'index']);
Route::get('/posts/{id}', [ApiPostController::class, 'show']);
Route::post('/posts', [ApiPostController::class, 'store']);
Route::get('/posts/type/{type}', [ApiPostController::class, 'getPostsByType']);
Route::put('/posts/{id}', [ApiPostController::class, 'update']);
