<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use App\User;
Use App\Funcionario;
Use App\Proprietario;

class ProprietarioController extends Controller
{
    //
    use RegistersUsers;
    protected $redirectTo = '/owner';
    public function __construct(){
        $this->middleware('guest');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    public function create(Request $request){
        $cod = rand(1111111,9999999);
        $this->createUser($request, $cod);
        Funcionario::create([
            'codFuncionario' => $cod,
            'cpfFuncionario'=>$request->cpf,
            'enderecoFuncionario'=>$request->endereco,
            'telefoneFuncionario'=>$request->telefone,
        ]);
        Proprietario::create([
            'codProprietario' => $cod,
            'cpfProprietario'=>$request->cpf,
            'enderecoProprietario'=>$request->endereco,
            'telefoneProprietario'=>$request->telefone,
        ]);
        return view('welcome');
    }
    public function createUser(Request $request, $cod){
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
