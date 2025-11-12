<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiretoriaController;
use App\Http\Controllers\ProfessorController;
use App\Models\Professor;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ZeladoriaController;
use App\Http\Controllers\MonitorController;

use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\CoordenadorController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\SalaController;

use App\Http\Controllers\PorteiroController;

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
    Route::resource('diretoria', DiretoriaController::class);
    Route::resource('professor', ProfessorController::class);
    Route::resource('laboratorio', LaboratorioController::class);
    Route::resource('zeladoria', ZeladoriaController::class);
    Route::resource('aluno', AlunoController::class);

    Route::get('/laboratorio/{id}/edit', [LaboratorioController::class, 'edit'])
    ->name('laboratorio.edit');
    Route::resource('disciplina', DisciplinaController::class);
    Route::resource('secretaria', SecretariaController::class);
    Route::resource('diretoria', DiretoriaController::class);
<<<<<<< HEAD
    Route::resource('monitores', MonitorController::class);
    Route::resource('cordenador', CordenadorController::class);
=======
    Route::resource('coordenador', CoordenadorController::class);
>>>>>>> f61f71b5a375786a23db52bef318f5a48eaf2963
    Route::resource('equipamento', EquipamentoController::class);
    Route::resource('porteiro', PorteiroController::class);
    Route::resource('sala', SalaController::class);
});

Route::post('cadastrar/turma', [TurmaController::class, 'cadastrar']);
Route::post('/like', [AvaliacaoController::class, 'like'])->name('like');
Route::get('consultar/turma/{id}', [TurmaController::class, 'consultar']);

require __DIR__ . '/auth.php';
