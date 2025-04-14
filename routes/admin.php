<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::domain(env('APP_ADMIN_DOMAIN'))
->prefix(env('APP_ADMIN_PREFIX'))
->namespace('Admin')->group(function () {
    Route::as('admin.')->group(function () {
        Auth::routes([
            'register' => false,
            'reset' => false,
            'verify' => false,
        ]);

        Route::middleware('auth:admin')->group(function () {
            Route::get('/home', function () {
return view('admin.home');
})->name('admin.home');
        });
    });
});