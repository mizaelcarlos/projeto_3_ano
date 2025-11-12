<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porteiro;

class PorteiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function  index()
    {
        $porteiros = Porteiro::all();
        return view('porteiro.index', compact('porteiros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('porteiro.create');
    }

    /**
 * Store a newly created resource in storage.
 */
    public function store(Request $request)
    {

        $porteiro = Porteiro::create([
            'nome' => $request->nome,
            'turno' => $request->turno,
            'horario_entrada' => $request->horario_entrada,
            'horario_saida' => $request->horario_saida
        ]);

        return redirect()->route('porteiro.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $porteiro = Porteiro::find($id);
        return view('porteiro.show', compact('porteiro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $porteiro = Porteiro::find($id);
        return view('porteiro.edit', compact('porteiro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $porteiro = Porteiro::find($id);
        $porteiro->update([
            'nome' => $request->nome,
            'gestao' => $request->gestao,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim
        ]);

        return redirect()->route('porteiro.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $porteiro = Porteiro::find($id);
        $porteiro->delete();
        return redirect()->route('porteiro.index');
    }
}
