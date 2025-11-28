<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TesteQRCodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteQRCodeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio/create', [HomeController::class, 'create']);
Route::get('/portfolio', [HomeController::class, 'create']);

// Route::post('/portfolio/cadastrar/{id}', [HomeController::class, 'store'])->name('portfolio.cadastrar');

Route::get('/dashboard', function () {
Route::get('/dashboard', [HomeController::class, 'principal'],  function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('testeqrcode', [TesteQRCodeController::class, 'teste1']);

Route ::get('testeqrcode', [TesteQRCodeController::class, 'teste1']);

Route::get('testeqrcode', [TesteQRCodeController::class, 'teste1']);

require __DIR__ . '/auth.php';
require __DIR__ . '/auth.php';
