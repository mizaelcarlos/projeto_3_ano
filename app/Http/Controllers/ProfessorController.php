<?php

namespace App\Http\Controllers;
use App\Models\Professor;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professor = Professor::all();
        return view('professor.index', compact('professor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $professor = Professor::all();
        return view('professor.create', compact('professor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $professor = Professor::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'disciplina' => $request->disciplina,
            'turma' => $request->turma,
            'turma_id' => $request->turma_id,
        ]);

        return redirect()->route('professor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professor = Professor::find($id);
        return view('professor.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = Professor::find($id);
        return view('professor.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professor = Professor::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'disciplina' => $request->disciplina,
            'turma' => $request->turma,
            'turma_id' => $request->turma_id,
        ]);

        return redirect()->route('professor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = Professor::find($id);
        $professor->delete();
        return redirect()->route('professor.index');
    }
}
