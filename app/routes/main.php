<?php

use App\Http\Route;

use App\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/manager', [LoginController::class, 'manager']);