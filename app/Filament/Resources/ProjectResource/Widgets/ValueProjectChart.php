<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use Filament\Widgets\ChartWidget;

class ValueProjectChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [1, 10, 5, 2],
                    'backgroundColor' => [
                        'rgb(255, 99, 132)',
                        'rgb(255, 205, 86)',
                        'rgb(0, 125, 0)',
                        'rgb(54, 162, 235)',
                    ],
                ],
            ],
            'labels' => [
                'Pending',
                'On Progress',
                'Testing',
                'Finished',
            ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
