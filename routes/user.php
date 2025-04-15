<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::domain(env('APP_USER_DOMAIN'))
->prefix(env('APP_USER_PREFIX'))
->as('user.')->namespace('User')->group(function () {
    Auth::routes([
        'register' => true,
        'reset' => true,
        'verify' => true,
    ]);

    Route::middleware('auth:user')->group(function () {
        Route::get('/home', function () {
return view('user.home');
})->name('user.home');
    });
});