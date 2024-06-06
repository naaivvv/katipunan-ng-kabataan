<?php

namespace App\Filament\Resources\Youth2Resource\Pages;

use App\Filament\Resources\Youth2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYouth2s extends ListRecords
{
    protected static string $resource = Youth2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
