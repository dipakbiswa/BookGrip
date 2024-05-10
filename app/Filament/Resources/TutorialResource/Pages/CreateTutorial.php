<?php

namespace App\Filament\Resources\TutorialResource\Pages;

use App\Filament\Resources\TutorialResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTutorial extends CreateRecord
{
    protected static string $resource = TutorialResource::class;
}
