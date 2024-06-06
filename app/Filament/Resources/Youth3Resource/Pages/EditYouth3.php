<?php

namespace App\Filament\Resources\Youth3Resource\Pages;

use App\Filament\Resources\Youth3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYouth3 extends EditRecord
{
    protected static string $resource = Youth3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
