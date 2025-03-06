<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('signup',[AuthController::class , 'signup']);
Route::get('login',[AuthController::class , 'login']);