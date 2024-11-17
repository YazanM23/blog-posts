<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/auth/register', [UsersController::class, 'createUser']);
Route::post('/auth/login', [UsersController::class, 'loginUser']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/auth/logout', [UsersController::class, 'logoutUser']);
    Route::get('/auth/posts', [PostsController::class, 'getPosts']);
    Route::post('/auth/posts', [PostsController::class, 'createPost']);
    Route::patch('/auth/posts/{id}', [PostsController::class, 'updatePost']);
    Route::delete('/auth/posts/{id}', [PostsController::class, 'deletePost']);
});
