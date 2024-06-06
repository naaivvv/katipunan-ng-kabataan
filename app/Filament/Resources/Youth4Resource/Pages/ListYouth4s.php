<?php

namespace App\Filament\Resources\Youth4Resource\Pages;

use App\Filament\Resources\Youth4Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYouth4s extends ListRecords
{
    protected static string $resource = Youth4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
