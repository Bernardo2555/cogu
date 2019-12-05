<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $primarykey = 'idProduto';

    public function itemVendas()
    {
        return $this->belongsToMany('App\itemSale', 'item_sales');
    }

    public $timestamps = false;

    protected $fillable = [
        'idProduto',
        'nome',
        'quantidadeMinima',
        'quantidadeTotal',
        'medida',
        'valor',
        'localArmazenamento'
    ];
}
