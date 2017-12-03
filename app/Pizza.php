<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $codigoPizza;
    protected $nomePizza;
    protected $precoPizza;

    public function __contruct($cod, $nome, $preco){
        $this->$codigoPizza = $cod;
        $this->$nomePizza = $nome;
        $this->$precoPizza = $preco;
    }

    public function getCodigoPizza(){
        return $this->$codigoPizza;
    }
    public function getNomePizza(){
        return $this->$nomePizza;
    }
    public function getPrecoPizza(){
        return $this->$precoPizza;
    }
}
