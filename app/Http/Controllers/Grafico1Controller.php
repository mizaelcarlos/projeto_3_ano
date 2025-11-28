<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Grafico1Controller extends Controller
{  
    public function grafico1()
    {
      $chart = (new LarapexChart)->setTitle('Posts')
                   ->setDataset([150, 120])
                   ->setLabels(['Published', 'No Published']);
        
        return view('grafico1', compact('chart'));
    }

}
