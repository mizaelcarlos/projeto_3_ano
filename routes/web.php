<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratorio;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view('laboratorio.index', compact('laboratorios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $laboratorios = Laboratorio::all();
        return view('laboratorio.create', compact('laboratorios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $laboratorio = Laboratorio::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'capacidade' => $request->capacidade,
            'equipamentos' => $request->equipamentos,
            'responsavel' => $request->responsavel,
        ]);

        return redirect()->route('laboratorio.index');
    }

    Route::resource('curso', CursoController::class);
    Route::resource('turma', TurmaController::class);
    Route::resource('diretoria', DiretoriaController::class);
    Route::resource('professor', ProfessorController::class);
    Route::resource('laboratorio', LaboratorioController::class);
    Route::resource('zeladoria', ZeladoriaController::class);
    Route::resource('aluno', AlunoController::class);
    Route::get('/aluno/{id}/boleto', [AlunoController::class, 'boleto'])->name('aluno.boleto');

    Route::get('/laboratorio/{id}/edit', [LaboratorioController::class, 'edit'])
    ->name('laboratorio.edit');
    Route::resource('disciplina', DisciplinaController::class);
    Route::resource('secretaria', SecretariaController::class);
    Route::resource('diretoria', DiretoriaController::class);
    Route::resource('coordenador', CoordenadorController::class);
    Route::resource('equipamento', EquipamentoController::class);
    Route::resource('porteiro', PorteiroController::class);
    Route::resource('sala', SalaController::class);
    Route::resource('monitoria', MonitorController::class);
}
