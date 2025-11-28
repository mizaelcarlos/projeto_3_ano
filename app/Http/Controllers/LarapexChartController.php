<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LarapexChartController extends Controller
{
       public function teste2()
    {
        $chart = (new LarapexChart)->setType('area')
        ->setTitle('Total Users Monthly')
        ->setSubtitle('From January to March')
        ->setXAxis([
            'Jan', 'Feb', 'Mar'
        ])
        ->setDataset([
            [
                'name'  =>  'Active Users',
                'data'  =>  [250, 700, 1200]
            ]
        ]);
        return view('teste2', compact('chart'));
    }
}
