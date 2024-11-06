<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class StatsOverviewEvents extends ChartWidget
{

    protected static ?string $heading = 'Estátisticas de Recadastramento criados';

    protected function getData(): array
    {
        $eventos =  [
            (object) ['created_at' => '2021-01-01'],
            (object) ['created_at' => '2021-01
            -01']
        ];

        $eventosPorMes = [];

        foreach ($eventos as $evento) {

            $mes = Carbon::parse($evento->created_at)->format('M');

            if (!isset($eventosPorMes[$mes])) {
                $eventosPorMes[$mes] = 1;
            } else {
                $eventosPorMes[$mes]++;
            }
        }

        $data = [];
        $labels = [];

        foreach ($eventosPorMes as $mes => $quantidade) {
            $data[] = $quantidade;
            $labels[] = $mes;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Recadastramento criados',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }


    protected function getType(): string
    {
        return 'line';
    }
}
