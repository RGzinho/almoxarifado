<?php

namespace App\Filament\Resources\Movimentos\Pages;

use App\Filament\Resources\Movimentos\MovimentosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMovimentos extends ListRecords
{
    protected static string $resource = MovimentosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
