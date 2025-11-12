<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $escolas = Escola::all();
        return view('escola.index', compact('escolas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $escola = Escola::all();
        return view('escola.create', compact('escola'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $escola = Escola::create([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone

        ]);

        return redirect()->route('escola.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $escola = Escola::find($id);
        return view('escola.show', compact('escola'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $escola = Escola::find($id);
        return view('escola.edit', compact('escola'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $escola = Escola::find($id);
        $escola->update([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone
        ]);

        return redirect()->route('escola.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $escola = Escola::find($id);
        $escola->delete();
        return redirect()->route('escola.index');
    }
}
