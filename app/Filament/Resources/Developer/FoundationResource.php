<?php

namespace App\Filament\Resources\Developer;

use App\Filament\Resources\Developer\FoundationResource\Pages;
use App\Filament\Resources\Developer\FoundationResource\RelationManagers;
use App\Models\Foundation;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FoundationResource extends Resource
{
    protected static ?string $model = Foundation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('registration_number')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Select::make('address_code')
                    ->relationship('address', 'full_name')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('registration_number'),
                TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFoundations::route('/'),
            'create' => Pages\CreateFoundation::route('/create'),
            'edit' => Pages\EditFoundation::route('/{record}/edit'),
        ];
    }
}
