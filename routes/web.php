<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// View or show the landing page
Route::view('/', 'landingpage.index')->name('home');

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'register'])
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
