<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $primaryKey = 'idUsuario';

    public function usuario()
    {
        return $this->belongsTo('App\User', 'usuarioId');
    }

    protected $fillable = [
        'usuarioId', 'cargo'
    ];

    public $timestamps = false;
}
