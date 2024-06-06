<?php

namespace App\Filament\Widgets;

use App\Models\Youth;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class AgeGroupChart extends ChartWidget
{
    protected static ?int $sort = 5;
    protected static string $color = 'success';
    protected static ?string $heading = 'Age Group';

    protected function getData(): array
    {
        $data = Youth::query()
            ->select('youth_age_group', DB::raw('count(*) as aggregate'))
            ->whereBetween('created_at', [now()->startOfYear(), now()->endOfYear()])
            ->groupBy('youth_age_group')
            ->get();

        $labels = $data->pluck('youth_age_group')->toArray();
        $values = $data->pluck('aggregate')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Age Group',
                    'data' => $values,
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
