<?php

namespace App\Filament\Resources\OtherResource\Pages;

use App\Filament\Resources\OtherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOther extends EditRecord
{
    protected static string $resource = OtherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
