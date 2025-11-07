<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiretoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function  index()
    {
           $diretoria = Diretoria::all();
           return view('diretoria.index', compact('diretoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diretorias = Diretoria::all();
        return view('diretoria.create', compact('diretorias'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $diretoria = Diretoria::find($id);
        $diretoria->update([
            'nome' => $request->nome,
            'gestao' => $request->gestao,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim
        ]);

          return redirect()->route('diretoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $secretaria = Secretaria::find($id);
        return view('secretaria.show', compact('secretaria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $secretaria = Secretaria::find($id);
        return view('secretaria.edit', compact('secretaria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $diretoria = Diretoria::find($id);
        $diretoria->update([
            'nome' => $request->nome,
            'gestao' => $request->gestao,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim
        ]);

          return redirect()->route('diretoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $diretoria = Diretoria::find($id);
        $diretoria->delete();
        return redirect()->route('diretoria.index');
    }
}
