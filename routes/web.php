<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteQRCodeController;
use App\Http\Controllers\GraficoController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('grafico', [GraficoController::class, 'teste2']);
Route::get('testeqrcode', [TesteQRCodeController::class, 'teste1']);

require __DIR__ . '/auth.php';
