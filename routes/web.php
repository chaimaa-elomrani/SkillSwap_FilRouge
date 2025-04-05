<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


//authentification
Route::get('login',[AuthController::class , 'showLoginForm']);
Route::get('/signup',[AuthController::class , 'showRegisterForm']);


Route::get('/',[HomeController::class , 'index']);
Route::get('/header',[HomeController::class , 'header']);
Route::get('/search',[SearchController::class , 'index']);



// services 
// Route::get('/services',[ServicesController::class , 'index']);
// Route::get('/services/post',[ServicesController::class , 'postFrom']);

// admin
Route::get('/dashboard',[DashboardController::class , 'index']);