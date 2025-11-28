<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficoController extends Controller
{
    public function grafico (){
        $chart = (new LarapexChart)->setTitle('Posts')
        ->setDataset([150, 120])
        ->setLabels(['Published', 'No Published']);
return view('grafico', compact('chart'));
    }
}
