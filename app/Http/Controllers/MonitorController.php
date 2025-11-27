<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    // LISTAR todos os monitores
    public function index()
    {
        $monitores = Monitor::all();
        return view('monitores.index', compact('monitores'));
    }

    // MOSTRAR formulário de criação
    public function create()
    {
        return view('monitores.create');
    }

    // SALVAR novo monitor
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:120',
            'numero' => 'required|string|max:20|unique:monitor,numero',
            'turno' => 'required|in:Manhã,Tarde,Noite',
        ]);

        Monitor::create($request->all());
        return redirect()->route('monitores.index')->with('success', 'Monitor criado com sucesso!');
    }

    // MOSTRAR um monitor específico
    public function show(Monitor $monitore)
    {
        return view('monitores.show', compact('monitore'));
    }

    // MOSTRAR formulário de edição
    public function edit(Monitor $monitore)
    {
        return view('monitores.edit', compact('monitore'));
    }

    // ATUALIZAR monitor
    public function update(Request $request, Monitor $monitore)
    {
        $request->validate([
            'nome' => 'required|string|max:120',
            'numero' => 'required|string|max:20|unique:monitor,numero,' . $monitore->id,
            'turno' => 'required|in:Manhã,Tarde,Noite',
        ]);

        $monitore->update($request->all());
        return redirect()->route('monitores.index')->with('success', 'Monitor atualizado com sucesso!');
    }

    // EXCLUIR monitor
    public function destroy(Monitor $monitore)
    {
        $monitore->delete();
        return redirect()->route('monitores.index')->with('success', 'Monitor deletado com sucesso!');
    }
}
