<?php

namespace App\Filament\Resources\InteriorResource\Pages;

use App\Filament\Resources\InteriorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInteriors extends ListRecords
{
    protected static string $resource = InteriorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
