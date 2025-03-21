<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');
Route::get('home', [HomeController::class, "home"])->name('home');
Route::get('about', [HomeController::class, "about"])->name('about');
Route::get('contact', [HomeController::class, "contact"])->name('contact');
Route::get('service', [HomeController::class, "service"])->name('service');
Route::get('portfolio', [HomeController::class, "portfolio"])->name('portfolio');
