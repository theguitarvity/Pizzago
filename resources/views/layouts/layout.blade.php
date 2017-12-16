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
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">

   <link rel="stylesheet" href="{{asset('css/materialize-stepper.min.css')}}">
   
    

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Materializecss compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <!-- jQueryValidation Plugin -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <!--Import Materialize-Stepper JavaScript (after the jquery.validate.js and materialize.js) -->
   
   <!--SCRIPT-->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
    <script src="{{asset('js/materialize-stepper.min.js')}}"></script>

        
    </head>
    <body class="{{ isset($bodyBack)?$bodyBack:'body' }}">
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
       
        <script>
            $(document).ready(function(){
                $('.parallax').parallax();
            });
        </script>
    </body>
</html>
