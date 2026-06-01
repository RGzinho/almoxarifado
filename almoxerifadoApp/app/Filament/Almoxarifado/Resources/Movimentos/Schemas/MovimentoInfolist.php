<?php

namespace App\Filament\Almoxarifado\Resources\Movimentos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MovimentoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('quantidade')
                    ->numeric(),
                TextEntry::make('produto_id')
                    ->numeric(),
                TextEntry::make('tipo')
                    ->badge(),
            ]);
    }
}
