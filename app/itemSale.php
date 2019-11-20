<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemSale extends Model
{

    protected $primarykey1 ='Produto_idProduto';
    protected $primarykey2 ='Venda_idVenda';

    public function itemVendas(){
        return $this->belongsToMany('App\Product')->withPivot('Produto_idProduto', 'Venda_idVenda');
    }

    protected $fillable = [
        'Produto_idProduto','Venda_idVenda','quantidade'
        ];
}
