<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {

        $recadastramento = [
            (object) ['created_at' => '2021-01-01'],
            (object) ['created_at' => '2021-01
            -01']
        ];
        $classes =[
            (object) ['created_at' => '2021-01-01'],
            (object) ['created_at' => '2021-01
            -01']
        ];
        $categoria = [
            (object) ['created_at' => '2021-01-01'],
            (object) ['created_at' => '2021-01
            -01']
        ];
        $clubes =[
            (object) ['created_at' => '2021-01-01'],
            (object) ['created_at' => '2021-01
            -01']
        ];


        $dadosAleatorios = [];
        for ($i = 0; $i < 12; $i++) {
            $dadosAleatorios[] = rand(1, 20);
        }
        return [

            Stat::make('Total Recadastramento', count($recadastramento))
                ->color('success')
                ->chart($dadosAleatorios),
//                ->url(route('filament.admin.resources.recadastramentos.index'))

            Stat::make('Total de Classes cadastrada', count($classes))
                ->color('danger')
                ->chart($dadosAleatorios),
//                ->url(route('filament.admin.resources.classes.index'))
            Stat::make('Total de Categorias cadastrada', count($categoria))
                ->color('info')
                ->chart($dadosAleatorios),
//                ->url(route('filament.admin.resources.categorias.index'))
            Stat::make('Total de Clubes cadastrado', count($clubes))
                ->color('warning')
                ->chart($dadosAleatorios)
                ->description('Clubes cadastrados'),
//                ->url(route('filament.admin.resources.clubes.index'))
        ];
    }
}
