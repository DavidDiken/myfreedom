<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ConsultationController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::prefix('tariffs')->group(function () {
    Route::get('/', fn () => redirect()->route('tariffs.show', ['tariff' => 'basic']))->name('tariffs.index');
    Route::get('{tariff}', [PageController::class, 'tariff'])->name('tariffs.show');
});

Route::get('/tariff-basic', fn () => redirect()->route('tariffs.show', ['tariff' => 'basic']))->name('tariff.basic');
Route::get('/tariff-standard', fn () => redirect()->route('tariffs.show', ['tariff' => 'standard']))->name('tariff.standard');
Route::get('/tariff-premium', fn () => redirect()->route('tariffs.show', ['tariff' => 'premium']))->name('tariff.premium');
Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/thank-you', [ConsultationController::class, 'thankYou'])->name('thankyou');
