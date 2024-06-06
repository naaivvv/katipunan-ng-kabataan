<?php

namespace App\Filament\Resources\Youth6Resource\Pages;

use App\Filament\Resources\Youth6Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYouth6s extends ListRecords
{
    protected static string $resource = Youth6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
