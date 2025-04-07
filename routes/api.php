<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// services posts 
Route::middleware('auth:sanctum')->group(function () {
});

Route::get('/posts', [PostsController::class, 'index']);
Route::post('/storePost', [PostsController::class, 'store'])->middleware('auth:sanctum');
Route::get('/showPost', [PostsController::class, 'show'])->middleware('auth:sanctum');
Route::put('/updatePost/{id}', [PostsController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/deletePost/{id}', [PostsController::class, 'destroy'])->middleware('auth:sanctum');
Route::get('/posts/user/{userId}', [PostsController::class, 'getPostByUser'])->middleware('auth:sanctum');
Route::get('/posts/category/{category}', [PostsController::class, 'getPostByCategory'])->middleware('auth:sanctum');
