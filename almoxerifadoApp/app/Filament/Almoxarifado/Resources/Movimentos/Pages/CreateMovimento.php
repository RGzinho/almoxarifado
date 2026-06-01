<?php

namespace App\Filament\Almoxarifado\Resources\Movimentos\Pages;

use App\Filament\Almoxarifado\Resources\Movimentos\MovimentoResource;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Produto;
use Filament\Resources\Notifications\Notification;

class CreateMovimento extends CreateRecord
{
    protected static string $resource = MovimentoResource::class;
    protected function beforeCreate(): void
    {
        $dados=$this->data;
        if($dados['tipo'] == 'saida'){
            $produto=Produto::find($dados['produto_id']);
            if($dados['estoque']>$produto->estoque){
                Notification::make()
                ->warning()
                ->title('Erro')
                ->body('A quantidade selecionada é maior que a em quantidade em estoque.')
                ->persistent()                
                ->send();
            $this->halt();
            }
        }
    }
    protected function afterCreate(): void
    {
        $movimento = $this->getRecord();
        $produto = Produto::find($movimento->produto_id);
        if($movimento->tipo == "saida"){
            $produto->decrement("quantidade", $movimento->quantidade);
        } elseif ($movimento->tipo == "entrada"){
            $produto->increment("quantidade", $movimento->quantidade);
        }
    }
}
