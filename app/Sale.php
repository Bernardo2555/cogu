<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

    protected $primarykey = 'idVenda';

    public function itemVendas()
    {
        return $this->belongsToMany('App\itemSale', 'item_sales');
    }

    protected $fillable = [
        'idVenda','dataVenda','valorTotal'
    ];
}
