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
}
