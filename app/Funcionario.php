<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends User
{
    protected $nomeFuncionario;
    protected $cpfFuncionario;
    protected $enderecoFuncionario;
    protected $telefoneFUncionario;
    private $dataAdmissao;
    private $salarioFuncionario;

    public function __construct($cod, $nome, $email, $senha, $cpf, $endereco, $telefone, $dataAdmissao, $salario){
        parent::__construct($cod, $nome,$email, $senha);
        $this->cpfFuncionario = $cpf;
        $this->enderecoFuncionario = $endereco;
        $this->telefoneFuncionario = $telefone;
        $this->dataAdmissao = $dataAdmissao;
        $this->salarioFuncionario = $salario;
    }

    public function getCodFuncionario(){
        return parent::getCodUser();
    }
    public function getNomeFuncionario(){
        return parent::getNomeUser();
    }
    public function getEmailFuncionario(){
        return parent::getEmailUser();
    }
    public function getSenhaFuncionario(){
        return parent::getSenhaUser();
    }

    public function getCpfFuncionario(){
        return $this->$cpfFuncionario;
    }

    public function getEnderecoFuncionario(){
        return $this->$enderecoFuncionario;
    }

    public function getTelefoneFuncionario(){
        return $this->$telefoneFUncionario;
    }

    public function getDataAdmissao(){
        return $this->$dataAdmissao;
    }

    public function getSalarioFuncionario(){
        return $this->$salarioFuncionario;
    }
    
    protected $fillable = [
        'nomeFuncionario', 'cpfFuncionario', 'enderecoFuncionario', 'telefoneFuncionario',
    ];
}
