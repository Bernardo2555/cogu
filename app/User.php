<?php

namespace App;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ResetPassword;

class User extends Authenticatable
{
    use Notifiable, HasRoles;


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idUsuario';

    public function endereco()
    {
        return $this->belongsTo('App\Address', 'enderecoId');
    }

    protected $fillable = [
        'CPF', 'enderecoId', 'dataNascimento', 'email', 'nome', 'RG', 'password', 'telefone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

}
