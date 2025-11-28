<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LarapexChartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteQRCodeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('testeqrcode', [TesteQRCodeController::class, 'teste1']);

Route::get('grafico', [LarapexChartController::class, 'graficos']);

require __DIR__ . '/auth.php';
