<?php

namespace App\Http\Controllers;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;

class LarapexChartController extends Controller
{
    public function graficos(){
        $chart = (new LarapexChart)->setType('area')
        ->setTitle('Total de Usuários Mensais')
        ->setSubtitle('Ano de 2025')
        ->setXAxis([
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ])
        ->setDataset([
            [
                'name'  =>  'Usuarios Ativos',
                'data'  =>  [250, 700, 1200, 1500, 1420, 2000, 1300, 3000, 2500, 2800, 3600, 3200]
            ]
        ]);
        return view ('grafico', compact('chart'));
    }
}
