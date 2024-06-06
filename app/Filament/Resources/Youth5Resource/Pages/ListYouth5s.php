<?php

namespace App\Filament\Resources\Youth5Resource\Pages;

use App\Filament\Resources\Youth5Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYouth5s extends ListRecords
{
    protected static string $resource = Youth5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
