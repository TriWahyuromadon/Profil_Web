<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index']);
//auth
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'authenticated']);
Route::get('/logout',[AuthController::class, 'logout']);
//dashboard
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');