<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


//authentification
// Route::post('register',[AuthController::class , 'register']);
Route::get('login',[AuthController::class , 'showLoginForm']);
// Route::post('login',[AuthController::class , 'login']);
Route::get('/signup',[AuthController::class , 'showRegisterForm']);


Route::get('/services',[ServicesController::class , 'index']);
Route::get('/',[HomeController::class , 'index']);
Route::get('/header',[HomeController::class , 'header']);
Route::get('/search',[SearchController::class , 'index']);