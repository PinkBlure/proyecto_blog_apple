<?php

use App\Http\Controllers\ApiPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApiPostController::class, 'index']);
Route::get('/{id}', [ApiPostController::class, 'show']);
Route::post('/', [ApiPostController::class, 'store']);
