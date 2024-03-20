<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});
Route::resource('post', PostController::class);
//Route::get('post', [PostController::class, 'index']);
//Route::get('post/{post}', [PostController::class, 'show']);
//Route::get('post/create', [PostController::class, 'create'])->name('post.create');
//Route::get('post/{post}/edit', [PostController::class, 'edit']);


//Route::post('post', [PostController::class, 'store'])->name('post.store');
//Route::put('post/{post}', [PostController::class, 'update']);
//Route::delete('post/{post}', [PostController::class, 'delete']);