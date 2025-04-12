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
Route::get('/skills',[SkillsController::class , 'index'])->name('skills.index');
// Route::get('/skills/domains',[SkillsController::class , 'getDomains'])->name('skills.domains');
Route::post('/skills/create',[SkillsController::class , 'store'])->name('skills.create');
Route::put('/skills/update/{skill}',[SkillsController::class , 'update'])->name('skills.update');
Route::delete('/skills/delete/{skill}',[SkillsController::class , 'destroy'])->name('skills.destroy');
Route::get('/skills/search',[SkillsController::class , 'search'])->name('skills.search');

// domains management 
Route::get('/domains',[DomainController::class , 'index'])->name('domains.index');
Route::post('/domains/create', [DomainController::class , 'store'])->name('domains.store');
Route::put('/domains/update/{domain}', [DomainController::class , 'update'])->name('domains.update');
Route::delete('/domains/delete/{domain}', [DomainController::class , 'destroy'])->name('domains.destroy');
Route::get('/domains/search', [DomainController::class , 'search'])->name('domains.search');

// // languages management 
Route::get('/languages',[LanguagesController::class , 'index'])->name('languages.index');
Route::post('/languages/create' , [LanguagesController::class , 'store'])->name('languages.create');
Route::put('/languages/update/{language}' , [LanguagesController::class , 'update'])->name('languages.update');
Route::delete('/languages/destroy/{language}' , [LanguagesController::class , 'destroy'])->name('languages.destroy');
Route::get('/languages/search' , [LanguagesController::class , 'search'])->name('languages.search');


//display skills , domains , languages in the dashboard 
Route::get('/dashboard/skills',[SkillsController::class , 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);