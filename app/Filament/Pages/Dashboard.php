<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StatsOverviewWidget;
use BackedEnum;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';

    public function getWidgets(): array
    {
        return [
            StatsOverviewWidget::class,
        ];
    }
}
