@extends('layouts.layout')
@section('content')
<div class="col s12 z-depth-4 card-panel register">
    <form action="{{route('register')}}" method="post">
    {{ csrf_field() }}
        <div class="row">
            <div class="input-field col s6 {{ $errors->has('email') ? ' has-error' : '' }}" >
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="name" id="nome" class="validate" required autofocus>
                <label for="nome">Nome</label>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div> 
        <div class="row">
            <div class="input-field col s6 {{ $errors->has('email') ? ' has-error' : '' }}" >
                <i class="material-icons prefix">account_circle</i>
                <input type="email" name="email" id="email" class="validate">
                <label for="email">E-mail</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div> 
        <div class="row">
            <div class="input-field col s6 " >
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="telefone" id="telefone" class="validate" required autofocus>
                <label for="telefone">Telefone</label>
               
            </div>
        </div> 
        <div class="row">
            <div class="input-field col s6 " >
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="endereco" id="endereco" class="validate" required autofocus>
                <label for="endereco">Endereço</label>
               
            </div>
        </div> 
        <div class="row ">    
            <div class="input-field col s6 {{ $errors->has('password') ? ' has-error' : '' }}">
                <i class="material-icons prefix">lock_outline</i>
                <input type="password" name="password" id="password">
                <label for="password">Senha</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row ">    
            <div class="input-field col s6 {{ $errors->has('password') ? ' has-error' : '' }}">
                <i class="material-icons prefix">lock_outline</i>
                <input type="password" name="password_confirmation" id="password_confirm">
                <label for="password_confirm">Confirme a senha</label>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <button class="btn waves-effect waves-light red" type="submit" name="action">Cadastrar
                    <i class="material-icons right">send</i>
                </button>
                
            </div>
            
        </div>
    </form>
</div>
@endsection