<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('dashboard.index');