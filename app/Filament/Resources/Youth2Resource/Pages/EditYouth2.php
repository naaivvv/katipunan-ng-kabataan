<?php

namespace App\Filament\Resources\Youth2Resource\Pages;

use App\Filament\Resources\Youth2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYouth2 extends EditRecord
{
    protected static string $resource = Youth2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
