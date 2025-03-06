<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('register',[AuthController::class , 'showRegisterForm']);
Route::post('register',[AuthController::class , 'register']);

Route::get('login',[AuthController::class , 'login']);