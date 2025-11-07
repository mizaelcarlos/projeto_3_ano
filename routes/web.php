<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\SecretariaController;
>>>>>>> 888371844f245b39c85c1c94719d6080b34476b5

Route::get('/', [HomeController::class, 'listarPublicacoes'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('curso', CursoController::class);
    Route::resource('turma', TurmaController::class);
    Route::resource('disciplina', DisciplinaController::class);
    Route::resource('secretaria', SecreatriaController::class);
>>>>>>> 888371844f245b39c85c1c94719d6080b34476b5

});    


Route::resource('aluno', AlunoController::class);
Route::post('/like', [AvaliacaoController::class, 'like'])->name('like');
Route::get('consultar/turma/{id}', [TurmaController::class, 'consultar']);
<<<<<<< HEAD

require __DIR__ . '/auth.php';
=======
Route::post('cadastrar/turma', [TurmaController::class, 'cadastrar']);
require __DIR__ . '/auth.php';
>>>>>>> 888371844f245b39c85c1c94719d6080b34476b5