<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\AuthController;

// Show landing page at root and keep /index redirect to root
Route::get('/', function () {
    return view('landing');
})->name('home');
Route::redirect('/index', '/');

// CRUD routes for perangkat
Route::resource('perangkat', PerangkatController::class)->only([
    'index','store','edit','update','destroy'
]);

// Landing page (static) route
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

// Auth pages
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Profile edit
Route::middleware('auth')->group(function(){
    Route::get('/profile/edit', [AuthController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');