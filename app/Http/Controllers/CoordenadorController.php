<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordenador;

class CoordenadorController extends Controller
{
    public function index()
    {
        $coordenadores = Coordenador::all();
        return view('coordenador.index', compact('coordenadores'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coordenador.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Coordenador::create($request->all());
        return redirect()->route('coordenador.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coordenador = coordenador::find($id);
        return view('coordenador.show', compact('coordenador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$coordenadors = coordenador::all();
        $coordenador = coordenador::find($id);
        return view('coordenador.edit', compact('coordenador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coordenador = coordenador::find($id);
        $coordenador->update($request->all());
        return redirect()->route('coordenador.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coordenador = Coordenador::find($id);
        $coordenador->delete();
        return redirect()->route('coordenador.index');
    }
}