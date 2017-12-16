@extends('layouts.layout')
@section('content')
<div class="parallax-container">
                <div class="parallax"><img src="{{asset('img/pizzaria.jpg')}}"></div>
            </div>
    <div class="owner row">
         
         <div class="col s12">
            <h2>Multiplique suas vendas, cadastrando sua Pizzaria no PizzaGO</h2>
         </div>
         
         <div class="col s6">
                <h5>Vantagens de ser um PizzaOwner</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Morbi posuere laoreet purus, quis porttitor mauris aliquam tincidunt. 
                Proin sit amet massa odio. Duis quis dolor malesuada, mollis massa at, luctus velit. 
                Donec a ligula id libero pellentesque gravida. Vivamus mollis lobortis mollis. 
                Aenean justo tellus, sodales nec nulla non, laoreet accumsan dui. 
                Nullam id mattis nisi. Duis porttitor dolor ex, vitae efficitur justo commodo id. 
                Cras odio tellus, malesuada quis convallis et, interdum ut massa. Proin nec suscipit lacus. 
                Donec sit amet placerat sapien. Maecenas id leo rutrum, luctus diam ut, finibus ligula. 
                In dictum dui vel arcu maximus, ac sodales ante accumsan. Vestibulum at ante erat. 
                Nulla vel mauris interdum, euismod est et, rhoncus nunc. Mauris sodales sapien a nisl malesuada, eget tristique quam suscipit.
                In laoreet neque in vehicula dignissim. Aliquam sit amet interdum urna. Ut elit nulla, elementum ac odio vel, lobortis facilisis eros. Praesent scelerisque in nibh sit amet interdum. Donec malesuada consequat commodo. Vestibulum in pharetra nibh, eget accumsan ipsum. Nunc maximus ornare bibendum. Donec lobortis convallis augue, id semper ante elementum vel. Etiam varius dui vel dui sollicitudin elementum. Nunc sapien ante, ultricies in bibendum eget, placerat vel quam. In fermentum ipsum ac sollicitudin imperdiet.
                </p>
                <div class="row">
                    <a href="{{url('/partner/cadastro')}}" class="btn red owner-btn">Seja um PizzaOwner</a>
                </div>
         </div>
         <div class="col s6">
            <div class="parallax-container">
                <div class="parallax"><img src="http://www.novonegocio.com.br/wp-content/uploads/2010/12/ponto-comercial-pizzaria.jpg"></div>
            </div>
         </div>
    </div>
   
@endsection