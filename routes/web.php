<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index');

Route::middleware(['auth:sanctum', 'verified'])
  ->get('/dashboard', function () {
    return view('home.dashboard');
  })
  ->name('dashboard');
