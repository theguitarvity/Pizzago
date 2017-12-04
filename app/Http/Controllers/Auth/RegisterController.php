<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    protected $cod;
    protected $cliente;
    protected $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $cod = rand(1111111,9999999);
        $this->cliente = new Cliente($cod, $data['name'], $data['email'], bcrypt($data['password']), $data['endereco'], $data['telefone']);
        
        $this->createUser($this->cliente);


        return Cliente::create([
            'codCliente'=>$this->cliente->getCodCliente() ,
            'telefoneCliente'=>$this->cliente->getTelefoneCliente(),
            'enderecoCliente'=>$this->cliente->getEnderecoCliente(),

        ]);
        
    }
    protected function createUser(Cliente $cliente){
        //$this->code = rand(1111111,9999999);
        return User::create([
            'id' => $cliente->getCodCliente(),
            'nomeUsuario' => $cliente->getNomeCliente(),
            'email' => $cliente->getEmailCliente(),
            'password' => $cliente->getSenhaCliente(),
        ]);
    }
}
