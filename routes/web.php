<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TypesController;
use Illuminate\Support\Facades\Route;


//authentification
Route::get('/login',[AuthController::class , 'showLoginForm'])->name('login.form');
Route::post('/login',[AuthController::class , 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/',[HomeController::class , 'index'])->name('home');
Route::get('/header',[HomeController::class , 'header']);
Route::get('/search',[SearchController::class , 'index']);

// domains page 
Route::get('/domains',[DomainsController::class , 'index']);
Route::get('/domains/getDomainByType',[DomainsController::class , 'getDomainByType']);
Route::get('/domains/{id}/posts', [DomainsController::class, 'showPosts'])->name('domain.posts');

// types 
Route::get('/domains/types',[DomainsController::class , 'getTypes']);


// posts pages 
// Route::get('/posts',[PostsController::class , 'index']);
Route::get('/post/create',[PostsController::class , 'index']);
// Route::post('/post/create',[PostsController::class , 'store']);



// skills management 
Route::get('/skills',[SkillsController::class , 'index'])->name('skills.index');
Route::post('/skills/create',[SkillsController::class , 'store'])->name('skills.store');
Route::put('/skills/update/{skill}',[SkillsController::class , 'update'])->name('skills.update');
Route::delete('/skills/delete/{skill}',[SkillsController::class , 'destroy'])->name('skills.destroy');
Route::get('/skills/search',[SkillsController::class , 'search'])->name('skills.search');



Route::get('/dashboard', [DashboardController::class, 'index']);

