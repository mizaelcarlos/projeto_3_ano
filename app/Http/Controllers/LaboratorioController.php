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
         return view('laboratorio.index', compact('laboratorios'));
 
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
        return view('laboratorio.edit', compact('laboratorio'));
<<<<<<< HEAD
        return view('lab$laboratorio.edit', compact('lab$laboratorio'));
=======
>>>>>>> a5001206c17270a2426132e1a23bbd0ba6623e30
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
     {
        $laboratorio = Laboratorio::find($id);
        $laboratorio->update([
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
        $laboratorio = laboratorio::find($id);
        $laboratorio->delete();
        return redirect()->route('laboratorio.index');
    }
}
