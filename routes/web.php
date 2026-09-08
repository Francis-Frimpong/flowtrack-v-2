<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
