<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::get('/show', [PostController::class, 'show']);
Route::get('/update', [PostController::class, 'update']);
Route::get('/destroy', [PostController::class, 'destroy']);
