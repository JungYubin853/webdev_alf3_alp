<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookedCourtController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Auth Routes
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login'])->name('handleLogin');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('handleRegister');

// Home Route
Route::get('/home', [CourtController::class, 'index'])->name('home');

// Booking Routes
Route::get('/booking', [BookingController::class, 'index'])->name('booking');

// Booked Court Routes
Route::get('/bookedCourt', [BookedCourtController::class, 'index'])->name('bookedCourt');

// User Routes
Route::get('/user', [UserController::class, 'index'])->name('user');
