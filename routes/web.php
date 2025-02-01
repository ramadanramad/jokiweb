<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\ContactPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', [LandingPageController::class, 'landing']);
Route::get('/about', [AboutPageController::class, 'about']);
Route::get('/service', [ServicePageController::class, 'service']);
Route::get('/kontak', [ContactPageController::class, 'kontak']);
