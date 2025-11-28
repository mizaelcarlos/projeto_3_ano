<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteQRCodeController;
use App\Http\Controllers\Grafico1Controller;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('testeqrcode', [TesteQRCodeController::class, 'teste1']);
Route::get('grafico1', [Grafico1Controller::class, 'grafico1']);
require __DIR__ . '/auth.php';
