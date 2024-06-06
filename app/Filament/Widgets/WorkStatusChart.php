<?php

namespace App\Filament\Widgets;

use App\Models\Youth;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class WorkStatusChart extends ChartWidget
{
    protected static ?int $sort = 3; // Change sort order if needed
    protected static string $color = 'primary'; // Adjust color as desired
    protected static ?string $heading = 'Work Status';

    protected function getData(): array
    {
        $workStatusOptions = [
            'Looking' => 'Looking',
            'Unemployed' => 'Unemployed',
            'Employed' => 'Employed',
        ];

        $data = Youth::query()
            ->select(DB::raw('work_status AS classification'), DB::raw('count(*) as aggregate'))
            ->whereIn('work_status', array_keys($workStatusOptions)) // Filter by valid options
            ->groupBy('work_status')
            ->get();

        $labels = $data->pluck('classification')->toArray();
        $values = $data->pluck('aggregate')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Work Status',
                    'data' => $values,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
