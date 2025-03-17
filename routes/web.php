<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('register',[AuthController::class , 'showRegisterForm']);
// Route::post('register',[AuthController::class , 'register']);

Route::get('/',[HomeController::class , 'index']);
// Route::get('login',[AuthController::class , 'showLoginForm']);
// Route::post('login',[AuthController::class , 'login']);