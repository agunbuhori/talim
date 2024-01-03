<?php

namespace App\Filament\Resources\Foundation\FacultyResource\Pages;

use App\Filament\Resources\Foundation\FacultyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaculties extends ListRecords
{
    protected static string $resource = FacultyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
