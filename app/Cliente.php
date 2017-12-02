<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Cliente extends User
{
    //
    protected $fillable = [
        'codCliente','telefoneCliente', 'enderecoCliente',
    ];
}
