<?php

namespace App\Filament\Resources\Movimentos;

use App\Filament\Resources\Movimentos\Pages\CreateMovimentos;
use App\Filament\Resources\Movimentos\Pages\EditMovimentos;
use App\Filament\Resources\Movimentos\Pages\ListMovimentos;
use App\Filament\Resources\Movimentos\Pages\ViewMovimentos;
use App\Filament\Resources\Movimentos\Schemas\MovimentosForm;
use App\Filament\Resources\Movimentos\Schemas\MovimentosInfolist;
use App\Filament\Resources\Movimentos\Tables\MovimentosTable;
use App\Models\Movimentos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MovimentosResource extends Resource
{
    protected static ?string $model = Movimentos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MovimentosForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MovimentosInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MovimentosTable::configure($table);
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
            'index' => ListMovimentos::route('/'),
            'create' => CreateMovimentos::route('/create'),
            'view' => ViewMovimentos::route('/{record}'),
            'edit' => EditMovimentos::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
