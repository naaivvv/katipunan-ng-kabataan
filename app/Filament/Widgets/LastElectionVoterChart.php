<?php

namespace App\Filament\Widgets;

use App\Models\Youth;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class LastElectionVoterChart extends ChartWidget
{
    protected static ?int $sort = 7; // Change sort order if needed
    protected static string $color = 'warning'; // Adjust color as desired
    protected static ?string $heading = 'Last Election Voters';

    protected function getData(): array
    {
        $voterStatuses = [
            1 => 'Voted',
            0 => 'Did Not Vote',
        ];

        $data = Youth::query()
            ->select('last_election_voter', DB::raw('count(*) as aggregate'))
            ->whereIn('last_election_voter', array_keys($voterStatuses)) // Filter by both true and false
            ->groupBy('last_election_voter')
            ->get();

        // Map the last_election_voter values to their respective labels
        $labels = $data->pluck('last_election_voter')->map(function ($value) use ($voterStatuses) {
            return $voterStatuses[$value];
        })->toArray();

        $values = $data->pluck('aggregate')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Last Election Voter',
                    'data' => $values,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'polarArea';
    }
}
