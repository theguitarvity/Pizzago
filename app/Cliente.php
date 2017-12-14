<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Cliente extends User
{
    protected $nomeCliente;
    protected $enderecoCliente;
    protected $telefoneCliente;

    public function criar($cod, $nome, $email, $senha, $endereco, $telefone){
        parent::__setCodigoUser($cod);
        parent::__setNomeUser($nome);
        parent::__setEmailUser($email);
        parent::__setSenhaUser($senha);
        $this->enderecoCliente = $endereco;
        $this->telefoneCliente = $telefone;
    }
 
    public function getCodCliente(){
        return parent::getCodUser();
        
    }
    public function getNomeCliente(){
        return parent::getNomeUser();
    }
    public function getEmailCliente(){
        return parent::getEmailUser();
    }
    public function getSenhaCliente(){
        return parent::getSenhaUser();
    }
    public function getEnderecoCliente(){
        return $this->enderecoCliente;
    }
    public function getTelefoneCliente(){
        return $this->telefoneCliente;
    }

    //
    protected $fillable = [
        'codCliente','telefoneCliente', 'enderecoCliente',
    ];
}
