<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficoController extends Controller
{
    public function index()
    {
        $chart = (new LarapexChart)
            ->barChart()
            ->setTitle('Vendas no Ano')
            ->addData('Vendas', [10, 40, 32, 55, 62, 90])
            ->setXAxis(['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun']);

        return view('grafico', compact('chart'));
    }
}
