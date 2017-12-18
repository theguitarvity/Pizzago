@extends('layouts.dashboard')

@section('content')
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h3>Realizar um pedido</h3>
                        <p>Siga os procedimentos para estar pedindo a sua pizza</p>
                        <div class="col s6 z-depth-4">
                            <ul class="stepper horizontal pedido">
                                <li class="step active">
                                    <div class="step-title waves-effect">Pizzarias próximas</div>
                                    <div class="step-content">
                                    <div class="row">
                                            <div class="input-field col s12">
                                                <div class="row">
                                                    <div class="col s12 m6">
                                                        <a class="next-step" href="#">
                                                            <div class="card small">
                                                                <div class="card-image">
                                                                    <img src="http://blog.elefanteverde.com.br/content/images/2015/08/Pizzaria-M-o-na-Arte.jpg">
                                                                    <span class="card-title">Pizzaria da casa</span>
                                                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>'
                                                                </div>
                                                                <div class="card-content">
                                                                    <p>Borda recheada por conta da casa, todas as quintas-feiras.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                    </div>
                                                    <div class="col s12 m6">
                                                        <a class="next-step" href="#">
                                                            <div class="card small">
                                                                <div class="card-image">
                                                                    <img src="http://blog.elefanteverde.com.br/content/images/2015/08/Pizzaria-M-o-na-Arte.jpg">
                                                                    <span class="card-title">Di Pizza</span>
                                                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                                                </div>
                                                                <div class="card-content">
                                                                    <p>Pizzas, lanches gigantes e esfihas.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                    </div>
                                                    <div class="col s12 m6">
                                                        <a class="next-step" href="#">
                                                            <div class="card small">
                                                                <div class="card-image">
                                                                <img src="http://blog.elefanteverde.com.br/content/images/2015/08/Pizzaria-M-o-na-Arte.jpg">
                                                                <span class="card-title">Pizzahut</span>
                                                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                                                </div>
                                                                <div class="card-content">
                                                                <p>Pizzas, lanches e  drive thru</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                    </div>
                                                    
                                                   
                                                </div>
                                            </div>
                                        
                                    </div>
                                </li>
                                <li class="step">
                                    <div class="step-title waves-effect">Cardápio</div>
                                    <div class="step-content">
                                    <ul class="collection">
                                            <ul>
                                                <div class="row">
                                                    <li class="collection-item avatar">
                                                        <img src="https://www.charlespizzaria.com.br/wp-content/uploads/2016/04/IMG_8408-Custom.jpg" alt="" class="circle">
                                                        <span class="title">Mussarela</span>
                                                        <p>Queijo Mussarela, tomate e borda de catupiry. </p>
                                                        <a href="#!" class="secondary-content"><i class="material-icons">add</i></a>
                                                    </li>
                                                </div>
                                                <div class="row">
                                                    <li class="collection-item avatar">
                                                        <img src="https://www.charlespizzaria.com.br/wp-content/uploads/2016/04/IMG_8408-Custom.jpg" alt="" class="circle">
                                                        <span class="title">Frango com catupiry</span>
                                                        <p>Queijo Mussarela, frango desfiado e catupiry. </p>
                                                        <a href="#!" class="secondary-content"><i class="material-icons">add</i></a>
                                                    </li>
                                                </div>
                                                <div class="row">
                                                    <li class="collection-item avatar">
                                                        <img src="https://www.charlespizzaria.com.br/wp-content/uploads/2016/04/IMG_8408-Custom.jpg" alt="" class="circle">
                                                        <span class="title">Marguerita</span>
                                                        <p>Queijo Mussarela, tomate, manjericão. </p>
                                                        <a href="#!" class="secondary-content"><i class="material-icons">add</i></a>
                                                    </li>
                                                </div>

                                               
                                            </ul>
                                        
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn next-step">Ir para finalização</button>
                                            <button class="waves-effect waves-dark btn-flat previous-step">Voltar</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div class="step-title waves-effect">Finalizar pedido</div>
                                    <div class="step-content">
                                        <h2>Obrigado!</h2>
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn" type="submit">Finalizar</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-yellow btn-flat">Fechar</a>

                    </div>
                </div>
@endsection
