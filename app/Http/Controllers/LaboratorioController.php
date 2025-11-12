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
        //
         $laboratorios = Laboratorio::all();
         return view('laboratorio.index', compact('laboratorio'));
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
     {
        $laboratorio = Laboratorio::find($id);
        return view('laboratorio.show', compact('laboratorio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $laboratorio = Laboratorio::find($id);
        return view('lab$laboratorio.edit', compact('lab$laboratorio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
     {
         $laboratorio = Laboratorio::update([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'capacidade' => $request->capacidade,
            'equipamentos' => $request->equipamentos,
            'responsavel' => $request->responsavel,
            
        ]);

        return redirect()->route('laboratorio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
     {
        $laboratorio = $Laboratorio::find($id);
        $laboratorio->delete();
        return redirect()->route('laboratorio.index');
    }
}
