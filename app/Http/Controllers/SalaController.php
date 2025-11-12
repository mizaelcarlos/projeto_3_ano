<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salas = Sala::all();
        return view('sala.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sala::create($request->all());

        return redirect()->route('sala.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sala = Sala::find($id);
        return view('sala.show', compact('sala'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$salas = sala::all();
        $sala = Sala::find($id);
        return view('sala.edit', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sala = Sala::find($id);
        $sala->update($request->all());
        return redirect()->route('sala.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sala = Sala::find($id);
        $sala->delete();
        return redirect()->route('sala.index');
    }
}
