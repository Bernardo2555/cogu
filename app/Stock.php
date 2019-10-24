<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    public $timestamps = false;

    public function produto(){
        return $this->hasMany('App\Product', 'estoqueId');
    }

    protected $fillable = [
        'isEstoque',
        'quantidadeTotal'
    ];
}
