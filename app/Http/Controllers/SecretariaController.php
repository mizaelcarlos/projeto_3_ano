<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secretaria;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secretarias = Secretaria::all();
        return view('secretaria.index', compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $secretaria = Secretaria::all();
        return view('secretaria.create', compact('secretaria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $secretaria = Secretaria::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
        ]);

        return redirect()->route('secretaria.index');
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
        $secretaria = Secretaria::find($id);
        $secretaria->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email
        ]);

        return redirect()->route('secretaria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $secretaria = Secretaria::find($id);
        $secretaria->delete();
        return redirect()->route('secretaria.index');
    }
}
