<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutboundSupplier extends Model
{

    protected $primaryKey = 'fornecedorId';
    protected $primaryKey1 = 'entradasaidaId';

    public function Fornecedorentradasaida(){
        return $this->belongsToMany('App\Provider')->withPivot('fornecedorId', 'entradasaidaId');
    }

    protected $fillable = [
        'fornecedorId', 'entradasaidaId'
    ];
}
