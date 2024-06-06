<?php

namespace App\Filament\Widgets;

use App\Models\Youth;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class RegisteredVoterChart extends ChartWidget
{
    protected static ?int $sort = 6; // Change sort order if needed
    protected static string $color = 'indigo'; // Adjust color as desired
    protected static ?string $heading = 'Registered Voters';

    protected function getData(): array
    {
        $voterStatuses = [
            1 => 'Registered',
            0 => 'Not Registered',
        ];

        $data = Youth::query()
            ->select('registered_voter', DB::raw('count(*) as aggregate'))
            ->whereIn('registered_voter', array_keys($voterStatuses)) // Filter by both true and false
            ->groupBy('registered_voter')
            ->get();

        // Map the registered_voter values to their respective labels
        $labels = $data->pluck('registered_voter')->map(function ($value) use ($voterStatuses) {
            return $voterStatuses[$value];
        })->toArray();

        $values = $data->pluck('aggregate')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Registered Voter',
                    'data' => $values,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
