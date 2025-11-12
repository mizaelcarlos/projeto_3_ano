<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zeladoria;
class ZeladoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $zeladorias = Zeladoria::all();
        return view('zeladoria.index', compact('zeladorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $zeladorias = Zeladoria::all();
        return view('zeladoria.create', compact('zeladorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $zeladoria = Zeladoria::create([
            'nome' => $request->nome,
            'setor' => $request->setor,
            'tarefa' => $request->tarefa,
            'turno' => $request->turno,

        ]);

        return redirect()->route('zeladoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $zeladoria = Zeladoria::find($id);
        return view('zeladoria.show', compact('zeladoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $zeladoria = Zeladoria::find($id);
        return view('zeladoria.edit', compact('zeladoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $zeladoria = Zeladoria::find($id);
        $zeladoria->update([
            'nome' => $request->nome,
            'setor' => $request->setor,
            'tarefa' => $request->tarefa,
            'turno' => $request->turno,
        ]);

        return redirect()->route('zeladoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $zeladoria = Zeladoria::find($id);
        $zeladoria->delete();
        return redirect()->route('zeladoria.index');
    }
}
