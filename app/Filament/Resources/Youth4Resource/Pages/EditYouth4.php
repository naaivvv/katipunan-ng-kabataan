<?php

namespace App\Filament\Resources\Youth4Resource\Pages;

use App\Filament\Resources\Youth4Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYouth4 extends EditRecord
{
    protected static string $resource = Youth4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
