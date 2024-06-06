<?php

namespace App\Filament\Widgets;

use App\Models\Youth;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class HighestEducationalAttainmentChart extends ChartWidget
{
    protected static ?int $sort = 4;
    protected static string $color = 'info';
    protected static ?string $heading = 'Highest Educational Attainment';

    protected function getData(): array
    {
        $educationalAttainmentOptions = Youth::select('highest_educational_attainment')
            ->distinct() // Get unique values
            ->pluck('highest_educational_attainment')
            ->toArray();

        $data = Youth::query()
            ->select(DB::raw('highest_educational_attainment AS classification'), DB::raw('count(*) as aggregate'))
            ->whereIn('highest_educational_attainment', $educationalAttainmentOptions) // Filter by valid options
            ->groupBy('highest_educational_attainment')
            ->get();

        $labels = $data->pluck('classification')->toArray();
        $values = $data->pluck('aggregate')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Highest Educational Attainment',
                    'data' => $values,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
