<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SkillsController;
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



// admin
// Route::get('/dashboard',action: [DashboardController::class , 'index']);
Route::get('skills_domains_languages',[DashboardController::class , 'skills_domains_lang']);


// skills management 
Route::get('/skills',[SkillsController::class , 'index']);
Route::post('/skills/create',[SkillsController::class , 'store'])->name('skills.create');
Route::put('/skills/update/{skill}',[SkillsController::class , 'update'])->name('skills.update');
Route::delete('/skills/delete/{skill}',[SkillsController::class , 'destroy'])->name('skills.destroy');
Route::get('/skills/search',[SkillsController::class , 'search'])->name('skills.search');


// domains management 
Route::get('/domains',[DomainController::class , 'index']);
Route::post('/domains/create', [DomainController::class , 'store']);
Route::put('/domains/update', [DomainController::class , 'update']);
Route::delete('/domains/delete', [DomainController::class , 'destroy']);
Route::get('/domains/search', [DomainController::class , 'search']);

// // languages management 
Route::get('/languages',[LanguagesController::class , 'index']);
Route::post('/languages/create' , [LanguagesController::class , 'store']);
Route::put('/languages/update' , [LanguagesController::class , 'update']);
Route::delete('/languages/delete' , [LanguagesController::class , 'destroy']);
Route::get('/languages/search' , [LanguagesController::class , 'search']);


//display skills , domains , languages in the dashboard 
Route::get('/dashboard/skills',[SkillsController::class , 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);