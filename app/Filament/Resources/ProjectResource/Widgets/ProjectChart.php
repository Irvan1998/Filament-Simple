<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use Filament\Widgets\ChartWidget;

class ProjectChart extends ChartWidget
{
    protected static ?string $heading = 'Chart Project';



    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Pending',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'backgroundColor' => '#8B0000',
                    'borderColor' => '#8B0000',
                ],
                [

                    'label' => 'On Progress',
                    'data' => [0, 11, 6, 2, 23, 35, 46, 76, 67, 35, 79, 83],
                    'backgroundColor' => '#FFD700',
                    'borderColor' => '#FFD700',
                ],
                [

                    'label' => 'Testing',
                    'data' => [0, 23, 4, 23, 22, 42, 42, 71, 25, 35, 37, 19],
                    'backgroundColor' => '#228B22',
                    'borderColor' => '#228B22',
                ],
                [

                    'label' => 'finished',
                    'data' => [0, 20, 2, 2, 41, 42, 35, 24, 61, 45, 67, 91],
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',

                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],


        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
