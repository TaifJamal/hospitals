<?php

use Illuminate\Support\Facades\Route;


Route::get('user/dashboard', function () {
    return view('dashboard.user.dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');
