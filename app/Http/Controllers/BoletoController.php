<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boleto;

class BoletoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $boletos = Boleto::all();
        return view('boleto.index', compact('boletos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       Boleto::create($request->all());

        return redirect()->route('boleto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // //
        // $boleto = Boleto::find($id);
        // return view('boleto.show', compact('boleto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $boleto = Boleto::find($id);
        return view('boleto.edit', compact('boleto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $boleto = Boleto::find($id);
        $boleto->update($request->all());

        return redirect()->route('boleto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $boleto = Boleto::find($id);
        $boleto->delete();
        return redirect()->route('boleto.index');
    }
}
