<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
class Cliente extends User
{
    //
    protected $fillable = [
        'idCliente', 'telefoneCliente', 'enderecoCliente'
    ];

}
