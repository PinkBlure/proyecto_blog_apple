<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/api-documentation', [PageController::class, 'apiDocumentation'])->name('api.documentation');
