<?php

namespace App\Filament\Resources\Foundation\FacultyResource\Pages;

use App\Filament\Resources\Foundation\FacultyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFaculty extends EditRecord
{
    protected static string $resource = FacultyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
