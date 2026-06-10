<?php

namespace App\Filament\Resources\Movimentos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MovimentoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tipo')
                    ->options(['entrada' => 'Entrada', 'saida' => 'Saída'])
                    ->required(),
                TextInput::make('quantidade')
                    ->required()
                    ->numeric()
                    ->default(0),
                Select::make('produto_id')
                    ->label('Produto')
                    ->relationship(name: 'produto', titleAttribute: 'nome')
                    ->required()
                    ->preload()
                    ->searchable(),
            ]);
    }
}
