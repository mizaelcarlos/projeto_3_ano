<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplina = Disciplina::all();
        
        return view('disciplina.index', compact('disciplina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $disciplina = Disciplina::all();
        
        return view('disciplina.create', compact('disciplina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Disciplina::create($request->all());

        return redirect()->route('disciplina.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $disciplina = Disciplina::find($id);
        
        return view('disciplina.show', compact('disciplina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $disciplina = Disciplina::all();
        
        return view('disciplina.edit', compact('disciplina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->update($request->all());
        
        return redirect()->route('disciplina.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->delete();
        
        return redirect()->route('curso.index');
    }
}