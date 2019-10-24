<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $primaryKey = 'idEndereco';



    public function usuario(){
        return $this->hasOne('App\User', 'enderecoId');

    }

    protected $fillable = [
        'CEP',
        'rua',
        'numero',
        'complemento',
        'cidade',
        'estado'
    ];
}
