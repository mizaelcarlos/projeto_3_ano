<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::get('/dashboard', [HomeController::class, 'principal'],  function () {
=======
Route::get('/portfolio/create', [HomeController::class, 'create']);

Route::post('/portfolio/cadastrar/{id}', [HomeController::class, 'store'])->name('portfolio.cadastrar');

Route::get('/dashboard', function () {
>>>>>>> d99e79fdf9417af0413c17e763d313decd5ed156
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
