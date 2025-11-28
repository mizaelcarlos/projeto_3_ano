<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteQRCodeController;
use App\Http\Controllers\LarapexChartController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('testeqrcode', [TesteQRCodeController::class, 'teste1']);
Route::get('testegrafico', [LarapexChartController::class, 'teste2']);

require __DIR__ . '/auth.php';
