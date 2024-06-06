<?php

namespace App\Filament\Widgets;

use App\Models\Youth;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Facades\DB;

class YouthClassificationChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected static string $color = 'danger';
    protected static ?string $heading = 'Youth Classification';

    protected function getData(): array
    {
        $data = Youth::query()
            ->select('youth_classification', DB::raw('count(*) as aggregate'))
            ->whereBetween('created_at', [now()->startOfYear(), now()->endOfYear()])
            ->groupBy('youth_classification')
            ->get();

        $labels = $data->pluck('youth_classification')->toArray();
        $values = $data->pluck('aggregate')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Youth Classification',
                    'data' => $values,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'radar';
    }
}
