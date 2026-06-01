<?php

namespace App\Filament\Almoxarifado\Resources\Movimentos\Pages;

use App\Filament\Almoxarifado\Resources\Movimentos\MovimentoResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMovimento extends EditRecord
{
    protected static string $resource = MovimentoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
