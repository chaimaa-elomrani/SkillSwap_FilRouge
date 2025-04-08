<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


//authentification
Route::get('/login',[AuthController::class , 'showLoginForm'])->name('login.form');
Route::post('/login',[AuthController::class , 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/',[HomeController::class , 'index'])->name('home');
Route::get('/header',[HomeController::class , 'header']);
Route::get('/search',[SearchController::class , 'index']);



// posts pages 
Route::get('/posts',[PostsController::class , 'index']);
Route::get('/post/create',[PostsController::class , 'postFrom']);
Route::post('/post/create',[PostsController::class , 'store']);


// skills page 
Route::get('/skills',[PostsController::class , 'skills'])->name('skills.index');
Route::post('/skills',[PostsController::class , 'storeSkills'])->name('skills.store');
// Route::get('/skills/edit/{skill}',[PostsController::class , 'editSkills'])->name('skills.edit');
Route::post('/skills/edit/{skill}',[PostsController::class , 'updateSkills'])->name('skills.update');
Route::get('/skills/delete/{skill}',[PostsController::class , 'deleteSkills'])->name('skills.delete');
Route::get('/skills/search',[PostsController::class , 'searchSkills'])->name('skills.search');
// Route::get('/skills/{skill}',[PostsController::class , 'showSkills'])->name('skills.show');





// admin
Route::get('/dashboard',[DashboardController::class , 'index']);


