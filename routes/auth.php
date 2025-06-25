<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // 🔹 TAMBAHKAN INI (GET Login Page)
    Route::get('login', function () {
        return view('auth.login');
    })->name('login');

    // 🔹 Proses login (POST)
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    // 🔹 Logout
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
