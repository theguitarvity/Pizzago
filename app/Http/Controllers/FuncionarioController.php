<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use App\User;
Use App\Funcionario;

class FuncionarioController extends Controller
{
    //
    use RegistersUsers;
    protected $redirectTo = '/owner';
    public function __construct(){
        $this->middleware('auth:owner');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    public function create(Requeste $request){
        /*$cod = rand(1111111,9999999);
        createUser($request, $cod);
        return Funcionario::create([
            'id' => $cod,
            'cpfFuncionario'=>$request->cpf,
            'enderecoFuncionario'=>$request->endereco,
            'telefoneFuncionario'=>$request->telefone,
        ]);*/
        return view('welcome');
    }
    protected function createUser(Request $request, $cod){
        //$this->code = rand(1111111,9999999);
        return User::create([
            'id' => $cod,
            'nomeUsuario' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }
    public function index(){
        return view('testeLogin');
    }
}
