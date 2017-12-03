<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $codigoPedido;
    protected $qtdPizzasPedido;
    protected $valorTotalPedido;

    public function __construct($cod, $qtd, $valorTotal){
        $this->$codigoPedido = $cod;
        $this->$qtdPizzasPedido = $qtd;
        $this->$valorTotalPedido = $valorTotal;
    }

    public function getCodigoPedido(){
        return $this->$codigoPedido;
    }

    public function getQtdPedido(){
        return $this->$qtdPizzasPedido;
    }

    public function getValorTotalPedido(){
        return $this->$valorTotal;
    }

}
