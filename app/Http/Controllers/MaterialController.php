<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
     public function index()
    {
        $material = Material::all();
        
        return view('material.index', compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $material = Material::all();
        return view('material.create', compact('material'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Turma::create($request->all());

        return redirect()->route('material.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
           $material = Material::find($id);
        return view('material.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
           $material = Material::find($id);
        $material = Material::all();
        return view('material.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $material = Material::find($id);
        $material->update($request->all());
        return redirect()->route('material.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $material = Material::find($id);
        $material->delete();
        return redirect()->route('material.index');
    }
}
