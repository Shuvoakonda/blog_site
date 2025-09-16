<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/post/{id}', [HomeController::class, 'show'])->name('post.show');
