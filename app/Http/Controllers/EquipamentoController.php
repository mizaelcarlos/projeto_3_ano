<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    // 
    public function index()
    {
        $equipamentos = Equipamento::all();
        return view('equipamento.index', compact('equipamentos'));
    }

    public function create()
    {
        return view('equipamento.create');
    }

    public function store(Request $request)
    {
        Equipamento::create($request->all());
        return redirect()->route('equipamento.index');
    }

    public function show(string $id)
    {
        // $equipamento = Equipamento::find($id);
        // return view('equipamento.show', compact('equipamento'));
    }

    public function update(Request $request, string $id)
    {
        $equipamento = Equipamento::find($id);
        $equipamento->update($request->all());
        return redirect()->route('equipamento.index');
    }

    public function destroy(string $id)
    {
        $equipamento = Equipamento::find($id);
        $equipamento->delete();
        return redirect()->route('equipamento.index');
    }
}
