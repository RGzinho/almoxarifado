<?php

namespace App\Filament\Almoxarifado\Resources\Produtos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProdutoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('nome'),
                TextEntry::make('descrição'),
                TextEntry::make('quantidade')
                    ->numeric(),
            ]);
    }
}
