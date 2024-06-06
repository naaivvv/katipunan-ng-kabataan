<?php

namespace App\Filament\Resources\Youth7Resource\Pages;

use App\Filament\Resources\Youth7Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYouth7 extends EditRecord
{
    protected static string $resource = Youth7Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
