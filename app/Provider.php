<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    protected $primaryKey = 'idFornecedor';

    public function entradaSaidas()
    {
        return $this->belongsToMany('App\InOut', 'outboundsuppliers');
    }

    public function endereco()
    {
        return $this->belongsTo('App\Address', 'enderecoId');
    }

    protected $fillable = [
    'idFornecedor',
    'enderecoId',
    'nomeFantasia',
    'nomeVendedor',
    'contato',
    'CNPJ'
];
    public $timestamps = false;
}
