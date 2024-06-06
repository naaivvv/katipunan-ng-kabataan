<?php

namespace App\Filament\Resources\Youth8Resource\Pages;

use App\Filament\Resources\Youth8Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYouth8s extends ListRecords
{
    protected static string $resource = Youth8Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
