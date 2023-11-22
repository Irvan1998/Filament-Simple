<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProjectOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pending', '$22.0k')
                ->description('3% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([10, 16, 15, 15, 20, 33, 42])
                ->color('success'),
            Stat::make('On Progress', '$23.1k')
                ->description('7% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->chart([20, 16, 14, 15, 14, 13, 12])
                ->color('danger'),
            Stat::make('Testing', '$12.0k')
                ->description('3% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([17, 16, 14, 15, 14, 13, 16])
                ->color('success'),
            Stat::make('Finished', '$1209.12k')
                ->description('3% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([17, 16, 14, 15, 14, 13, 16])
                ->color('success'),
        ];
    }
}
