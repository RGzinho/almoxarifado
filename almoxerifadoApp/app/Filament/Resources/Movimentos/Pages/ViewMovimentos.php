<?php

namespace App\Filament\Resources\Movimentos\Pages;

use App\Filament\Resources\Movimentos\MovimentosResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMovimentos extends ViewRecord
{
    protected static string $resource = MovimentosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
