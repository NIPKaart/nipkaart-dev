<?php

use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;

Route::get('/', [Frontend\HomeController::class, 'home'])->name('home');
Route::get('/about', [Frontend\HomeController::class, 'about'])->name('about');
