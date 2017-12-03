<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $codigoAvaliacao;
    protected $notaAvaliacao;

    public function __construct($cod, $nota){
        $this->$codigoAvaliacao = $cod;
        $this->$notaAvaliacao = $nota;
    }

    public function getCodigoAvaliacao(){
        return $this->$codigoAvaliacao;
    }

    public function getNotaAvaliacao(){
        return $this->$notaAvaliacao;
    }
}
