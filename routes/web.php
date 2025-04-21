<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [AuthController::class, 'register'])->name(name: 'registration.post');


Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name(name: 'login.post');


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
