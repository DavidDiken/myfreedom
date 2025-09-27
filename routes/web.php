<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tariff-basic', [PageController::class, 'tariffBasic'])->name('tariff.basic');
Route::get('/tariff-standard', [PageController::class, 'tariffStandard'])->name('tariff.standard');
Route::get('/tariff-premium', [PageController::class, 'tariffPremium'])->name('tariff.premium');
