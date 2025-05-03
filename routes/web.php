<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\PersonalServicesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\TypesController;
use Illuminate\Support\Facades\Route;


//authentification
Route::get('/login',[AuthController::class , 'showLoginForm'])->name('login.form');
Route::post('/login',[AuthController::class , 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/',[HomeController::class , 'index'])->name('home');
Route::get('/header',[HomeController::class , 'header']);

// domains page 
Route::get('/domains',[DomainsController::class , 'index'])->name('domains.index');
Route::get('/domains/getDomainByType',[DomainsController::class , 'getDomainByType']);
Route::get('/domains/{domains}', [DomainsController::class, 'showByDomain'])->name('domains.show');

// types 
Route::get('/domains/types',[DomainsController::class , 'getTypes']);


// posts pages 
Route::get('/post/create',[PostsController::class , 'index'])->name('posts.index');
Route::post('/post/store', [PostsController::class , 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostsController::class , 'destroy'])->name('posts.destroy');



// skills management 
Route::get('/skills',[SkillsController::class , 'index'])->name('skills.index');
Route::post('/skills/create',[SkillsController::class , 'store'])->name('skills.store');
Route::put('/skills/update/{skill}',[SkillsController::class , 'update'])->name('skills.update');
// Route::delete('/skills/delete/{skill}',[SkillsController::class , 'destroy'])->name('skills.destroy');
Route::get('/skills/search',[SkillsController::class , 'search'])->name('skills.search');
Route::get('/skills', [SkillsController::class, 'getSkillsByUser'])->name('skills.getSkillsByUser');
Route::post('/save-skills', 'App\Http\Controllers\SkillsController@store')->name('skills.store');
Route::get('/skills/{skill}', [SkillsController::class, 'deleteSkill']);





// routes/web.php

Route::middleware(['auth'])->group(function () {    
    Route::get('/myProfile', [ProfileController::class, 'show'])->name('profile.index');
    Route::get('/profile/show', [ProfileController::class, 'index'])->name('profile.show');
    Route::get('/profile/{id}', [ProfileController::class, 'userProfile'])->name('profile.user');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    
});



// services management
Route::get('/personal_services', [PersonalServicesController::class, 'getPersonalServicesbyUserId'])->name('personal_services.index');
Route::post('/personal_services/store', [PersonalServicesController::class, 'store']);
Route::get('/personal_services/{id}', [PersonalServicesController::class, 'destroy']);


// Requests routes
Route::middleware('auth')->group(function() {
    Route::get('/requests', [RequestsController::class, 'getRequests']);
    Route::post('/requests/{id}/status', [RequestsController::class, 'updateRequestStatus'])->middleware('auth');
    Route::post('/requests', [App\Http\Controllers\RequestsController::class, 'store'])->name('requests.store');
    Route::post('/requests/{id}/accept', [RequestsController::class, 'accept'])->name('requests.accept');
    Route::post('/requests/{id}/reject', [RequestsController::class, 'reject'])->name('requests.reject');
    Route::post('/sendRequest', [RequestsController::class, 'sendRequest'])->name('requests.send');
    Route::get('/request/store', [RequestsController::class, 'store'])->name('requests.store');
    Route::post('/requests/{id}/update-status', [RequestsController::class, 'updateStatus'])->name('requests.update-status');
});



// transactions routes 
Route::get('/transactions', [TransactionsController::class , 'index'])->name('transactions.index');
Route::post('/transactions/confirm/{requestId}', [TransactionsController::class , 'confirmService'])->name('transactions.confirm');
// Route::get('transactions/service_confirm', [TransactionsController::class, 'getPendingServicesToConfirm'])->name('transactions.pendingServicesToConfirm');