<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends User
{
    //
    protected $fillable = [
        'nomeFuncionario', 'cpfFuncionario', 'enderecoFuncionario', 'telefoneFuncionario',
    ];
}
