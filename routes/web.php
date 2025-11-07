<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiretoriaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ZeladoriaController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\SecretariaController;

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
    Route::resource('professor', ProfessorController::class);

    Route::resource('laboratorio', LaboratorioController::class);
    Route::resource('zeladoria', ZeladoriaController::class);
    Route::post('cadastrar/turma', [TurmaController::class, 'cadastrar']);
    Route::resource('aluno', AlunoController::class);
    Route::resource('disciplina', DisciplinaController::class);
    Route::resource('secretaria', SecretariaController::class);
});



Route::resource('diretoria', DiretoriaController::class);
Route::resource('aluno', AlunoController::class);
Route::post('/like', [AvaliacaoController::class, 'like'])->name('like');
Route::get('consultar/turma/{id}', [TurmaController::class, 'consultar']);

require __DIR__ . '/auth.php';