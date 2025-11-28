<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TesteQRCodeController extends Controller
{
    public function teste1(){
        $chart = (new LarapexChart)->setTitle('Doce ou Salgado?')
                   ->setDataset([150, 120])
                   ->setLabels(['Salgado', 'Doce']);
        return view('teste1', compact('chart'));
    }
}
