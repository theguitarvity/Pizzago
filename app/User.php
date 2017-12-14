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


    
    
    public function setCodigoUser($cod){
        $this->codUser = $cod;
    }
    public function setNomeUser($nome){
        $this->nomeUser = $nome;
    }
    public function setEmailUser($email){
        $this->emailUser = $email;
    }
    public function setSenhaUser($senha){
        $this->senhaUser = $senha;
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
