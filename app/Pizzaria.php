<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizzaria extends Model
{
    protected $codigoPizzaria;
    protected $nomePizzaria;
    protected $enderecoPizzaria;

    public function __contruct($cod, $nome, $endereco){
        $this->$codigoPizzaria = $cod;
        $this->$nomePizzaria = $nome;
        $this->$enderecoPizzaria = $endereco;
    }

    public function getCodigoPizzaria(){
        return $this->$codigoPizzaria;
    }
    public function getNomePizzaria(){
        return $this->$nomePizzaria;
    }
    public function getEnderecoPizzaria(){
        return $this->$enderecoPizzaria;
    }
}
