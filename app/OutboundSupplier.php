<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutboundSupplier extends Model
{

    protected $primaryKey = 'fornecedor_idFornecedor';
    protected $primaryKey1 = 'entrada_saidas_idES';

    public function Fornecedorentradasaida(){
        return $this->belongsToMany('App\Provider')->withPivot('fornecedor_idFornecedor', 'entrada_saidas_idES');
    }

    protected $fillable = [
        'fornecedor_idFornecedor', 'entrada_saidas_idES'
    ];
}
