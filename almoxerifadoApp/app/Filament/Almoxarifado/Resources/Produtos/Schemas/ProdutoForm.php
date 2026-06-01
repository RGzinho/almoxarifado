<?php

namespace App\Filament\Almoxarifado\Resources\Produtos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProdutoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nome')
                    ->required(),
                TextInput::make('descrição')
                    ->required(),
                TextInput::make('quantidade')
                    ->required()
                    ->numeric(),
            ]);
    }
}
