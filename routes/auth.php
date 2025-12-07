<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('IsLogin')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', function () {
        return view('dashboard');
    })->name('profile');
});

Route::middleware(['IsLogin', 'IsStudent'])->group(function () {
    Route::prefix('/payment')->name('payment.')->group(function () {
        Route::get('/create', [PaymentController::class, 'create'])->name('create');
        Route::post('/create', [PaymentController::class, 'store'])->name('store');
    });
});

Route::middleware(['IsLogin', 'IsAdmin'])->group(function () {
    Route::resource('user', UserController::class);
    Route::prefix('/payment')->name('payment.')->group(function () {
        Route::get('/', [PaymentController::class, 'index'])->name('index');
        Route::get('/data', [PaymentController::class, 'data'])->name('data');
        Route::prefix('/{id}')->group(function () {
            Route::get('/', [PaymentController::class, 'show'])->name('show');
            Route::get('/accepted', [PaymentController::class, 'accepted'])->name('accepted');
            Route::get('/rejected', [PaymentController::class, 'rejected'])->name('rejected');
        });
    });
    // Route::resource('/payment', PaymentController::class)->except(['create', 'store', 'destroy']);
});

Route::middleware('IsGuest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
    Route::get('/registrasi', [RegisterController::class, 'index'])->name('register');
    Route::post('/registrasi', [RegisterController::class, 'store'])->name('register.store');
});