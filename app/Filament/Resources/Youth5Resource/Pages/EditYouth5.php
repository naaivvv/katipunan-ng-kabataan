<?php

namespace App\Filament\Resources\Youth5Resource\Pages;

use App\Filament\Resources\Youth5Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYouth5 extends EditRecord
{
    protected static string $resource = Youth5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
