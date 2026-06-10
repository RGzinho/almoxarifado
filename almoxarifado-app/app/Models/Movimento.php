<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Movimento extends Model
{
    protected $fillable = [
        'quantidade',
        'tipo',
        'produto_id',
    ];
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
}
