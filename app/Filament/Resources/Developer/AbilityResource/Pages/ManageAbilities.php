<?php

namespace App\Filament\Resources\Developer\AbilityResource\Pages;

use App\Filament\Resources\Developer\AbilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAbilities extends ManageRecords
{
    protected static string $resource = AbilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
