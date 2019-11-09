<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $primarykey = 'idProduto';

    public $timestamps = false;

    protected $fillable = [
        'idProduto',
        'nome',
        'quantidadeMinima',
        'quantidadeTotal',
        'medida',
        'valor'
    ];
}
