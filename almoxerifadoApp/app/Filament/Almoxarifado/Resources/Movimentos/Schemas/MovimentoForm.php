<?php

namespace App\Filament\Almoxarifado\Resources\Movimentos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MovimentoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('quantidade')
                    ->required()
                    ->numeric(),
                TextInput::make('produto_id')
                    ->required()
                    ->numeric(),
                Select::make('tipo')
                    ->options(['entrada' => 'Entrada', 'saida' => 'Saída'])
                    ->required(),
            ]);
    }
}
