<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InOut extends Model
{

    protected $primaryKey = 'idES';

    public function fornecedor()
    {
            return $this->belongsToMany('App\Provider', 'providers');
    }

    public function estoque()
    {
        return $this->belongsToMany('App\Stock', 'estoqueId');
    }

    protected $guarded = [];

    public $timestamps = false;



}
