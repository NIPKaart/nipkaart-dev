<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'root'])->name('root');

// Route::get('/', function () {
//     return view('pages.home');
// });
