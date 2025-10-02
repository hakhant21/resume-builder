<?php

namespace App\Filament\Resources\OtherResource\Pages;

use App\Filament\Resources\OtherResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOthers extends ListRecords
{
    protected static string $resource = OtherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
