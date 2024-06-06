<?php

namespace App\Filament\Resources\Youth3Resource\Pages;

use App\Filament\Resources\Youth3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYouth3s extends ListRecords
{
    protected static string $resource = Youth3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
