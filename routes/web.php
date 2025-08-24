<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShowColumnController;

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Route (placeholder)
Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::resource('location', LocationController::class);
Route::get('/locations/data', [LocationController::class, 'getData'])->name('locations.data');

// Column Visibility Routes
Route::get('/columns', [ShowColumnController::class, 'getColumns'])->name('columns.get');
Route::post('/columns', [ShowColumnController::class, 'updateColumn'])->name('columns.update');
