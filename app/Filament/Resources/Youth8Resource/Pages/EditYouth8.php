<?php

namespace App\Filament\Resources\Youth8Resource\Pages;

use App\Filament\Resources\Youth8Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYouth8 extends EditRecord
{
    protected static string $resource = Youth8Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
