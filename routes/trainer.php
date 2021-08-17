<?php

namespace App\Http\Controllers\Trainer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trainer\Auth\AuthenticatedSessionController;

Route::group(['prefix' => 'trainer', 'as' => 'trainer.'], function () {

    Route::resources([
        'trainer' => TrainerController::class,
        'trainerlogin' => TrainerLoginController::class,
    ]);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->name('login')
            ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth:trainer')
    ->name('logout');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');


});
