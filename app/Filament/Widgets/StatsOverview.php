<?php

namespace App\Filament\Widgets;

use App\Models\Youth;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
        Stat::make('All Youths', Youth::query()->count())
            ->description('All youths in Brgy. Zone 3')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('primary'),
        Stat::make('Baricotot', Youth::query()->where('purok', 'Baricotot')->count())
            ->description('All youths in Baricotot')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        Stat::make('Bay-ad', Youth::query()->where('purok', 'Bay-ad')->count())
            ->description('All youths in Bay-ad')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('warning'),
        Stat::make('Punao', Youth::query()->where('purok', 'Punao')->count())
            ->description('All youths in Punao')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('info'),
        Stat::make('Lampisaw', Youth::query()->where('purok', 'Lampisaw')->count())
            ->description('All youths in Lampisaw')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('danger'),
        Stat::make('Greenshell', Youth::query()->where('purok', 'Greenshell')->count())
            ->description('All youths in Greenshell')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('primary'),
        Stat::make('Sigay', Youth::query()->where('purok', 'Sigay')->count())
            ->description('All youths in Sigay')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        Stat::make('Tahong', Youth::query()->where('purok', 'Tahong')->count())
            ->description('All youths in Tahong')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('warning'),
        Stat::make('Lagang', Youth::query()->where('purok', 'Lagang')->count())
            ->description('All youths in Lagang')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('info'),
        ];
    }
}
