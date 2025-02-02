<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SellcarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
  Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');

  Route::post('/register', [RegisterController::class, 'store']);

  Route::get('/login', [AuthController::class, 'create'])
    ->name('login');

  Route::post('/login', [AuthController::class, 'store']);

  Route::get('/forgot-password', [AuthController::class, 'requestPasswordLink'])
    ->name('password.request');

  Route::post('/forgot-password', [AuthController::class, 'validateEmail'])
    ->name('password.email');

  Route::get('/reset-password/{token}', [AuthController::class, 'resetPasswordView'])
    ->name('password.reset');

  Route::post('/reset-password', [AuthController::class, 'resetPassword'])
    ->name('password.update');
});

Route::middleware('auth')->group(function () {
  Route::post('/logout', [AuthController::class, 'destroy'])->name(name: 'logout');

  Route::get('/email/verify', [AuthController::class, 'verificationNotice'])->name('verification.notice');

  Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verification'])
    ->middleware('signed')
    ->name('verification.verify');

  Route::post('/email/verification-notification', [AuthController::class, 'resendEmailVerification'])
    ->middleware(['throttle:6,1'])
    ->name('verification.send');

  Route::get('/profile', [UserController::class, 'profile'])
    ->middleware('verified')
    ->name('profile');

  Route::post('/profile', [UserController::class, 'updateInfo'])->name('updateInfo');

  Route::put('/profile', [UserController::class, 'updatePassword'])->name('updatePassword');

  Route::get('/sellcar', [SellcarController::class, 'index'])
    ->middleware('verified')
    ->name('sellcar');

});
require __DIR__ . '/admin.php';
