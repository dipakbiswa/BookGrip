<?php

namespace App\Filament\Resources\InteriorResource\Pages;

use App\Filament\Resources\InteriorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInterior extends EditRecord
{
    protected static string $resource = InteriorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
