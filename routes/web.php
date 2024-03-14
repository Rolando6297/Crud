<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('post', PostController::class);
Route::get('post', [PostController::class, 'index']);
Route::get('post/{post}', [PostController::class, 'show']);
Route::get('post/create', [PostController::class, 'create']);
Route::get('post/{post}/edit', [PostController::class, 'edit']);