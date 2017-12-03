<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 
    protected $codUser;
    protected $nomeUser;
    protected $emaiUser;
    protected $senhaUser;


    public function __construct($cod, $nome, $email, $senha){
        $this->codUser = $cod;
        $this->nomeUser = $nome;
        $this->emailUser = $email;
        $this->senha = $senha;
    }

    public function getCodUser(){
        return $this->codUser;
    }
    public function getNomeUser(){
        return $this->nomeUser;
    }
    public function getEmailUser(){
        return $this->emailUser;
    }
    public function getSenhaUser(){
        return $this->senhaUser;
    }
    protected $fillable = [
       'id', 'nomeUsuario', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passwordUsuario', 'remember_token',
    ];
}
