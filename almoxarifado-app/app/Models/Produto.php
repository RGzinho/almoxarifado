<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'marca',
        'quantidade',
    ];
    public function movimentos()
    {
        return $this->hasMany(Movimento::class);
    }
}
