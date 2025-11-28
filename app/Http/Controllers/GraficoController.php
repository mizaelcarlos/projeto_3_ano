<?php

namespace App\Http\Controllers;
use ArielMejiaDev\LarapexCharts\LarapexChart;

use Illuminate\Http\Request;

class GraficoController extends Controller
{
    public function teste2()
    {
        $chart = (new LarapexChart)->setType('area')
        ->setTitle('Total Users Monthly')
        ->setSubtitle('From January to March')
        ->setXAxis([
            'Jan', 'Feb', 'Mar','Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'
        ])
        ->setDataset([
            [
                'name'  =>  'Active Users',
                'data'  =>  [250, 700, 1200, 2000, 1900, 2300, 2700, 3000, 2800, 3200, 4000, 4500]
            ]
        ]);
        return view('teste2', compact('chart'));
    }
}
