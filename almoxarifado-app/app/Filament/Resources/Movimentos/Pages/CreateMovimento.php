<?php

namespace App\Filament\Resources\Movimentos\Pages;

use App\Filament\Resources\Movimentos\MovimentoResource;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Produto;
use Filament\Notifications\Notification;

class CreateMovimento extends CreateRecord
{
    protected static string $resource = MovimentoResource::class;

    protected function beforeCreate(): void
    {
        $dados=$this->data;
        if($dados['tipo'] == 'saida'){
            $produto=Produto::find($dados['produto_id']);
            if($dados['quantidade']>$produto->quantidade){
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
        $movimentacao = $this->getRecord();
        $produto = Produto::find($movimentacao->produto_id);
        if($movimentacao->tipo == 'saida'){
            $produto->decrement('quantidade', $movimentacao->quantidade);
        } else {
            $produto->increment('quantidade', $movimentacao->quantidade);
        }
    }
}