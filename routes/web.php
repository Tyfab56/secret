<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\IndexController;


Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/test/', [App\Http\Controllers\IndexController::class, 'test']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
