<?php

use App\Http\Controllers\HubController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', static function () {
    return view('welcome');
});

Route::post('register', [AuthController::class, 'register']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('login', [AuthController::class, 'login']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/', [HubController::class, 'index'])->name('home');
});
