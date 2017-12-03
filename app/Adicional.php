<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adicional extends Model
{
    protected $codigoIngrediente;
    protected $valorIngrediente;

    public function __construct($codIngrediente, $valorIngrediente){
        $this->$codigoIngrediente = $codIngrediente;
        $this->$valorIngrediente = $valorIngrediente;
    }

    public function getCodigoIngrediente(){
        return $this->$codigoIngrediente;
    }

    public function getValorIngrediente(){
        return $this->$valorIngrediente;
    }
}
