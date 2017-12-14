<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','PizzaGo')}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
        <!-- Styles -->
        <link rel="stylesheet" href="style.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">

        
    </head>
    <body>
        <div class="navbar-fixed" style="background-color:#BB0303;">
            <nav>
            @if(Route::has('login'))
                <div class="nav-wrapper menu">
                    @auth
                        <a href="{{url('/home')}}" class = "brand-logo" >Home</a>
                    @else
                    <a href="{{url('/')}}" class="brand-logo"><img src="{{asset('img/logo4.png')}}" alt="logo" class="logo"></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="{{url('/sobre')}}">Sobre nós</a></li>
                        <li><a href="{{url('/partner')}}">Seja um PizzaOwner</a></li>
                        <li><a href="{{route('login')}}">Minha Conta</a></li>
                        <li><a href="{{route('register')}}">Cadastre-se</a></li>
                        
                    </ul>
                    @endauth
                </div>
            @endif    
            </nav>
        </div>
       
        
        <div class="content">
        

            @yield('content')
        </div>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
        
    </body>
</html>
