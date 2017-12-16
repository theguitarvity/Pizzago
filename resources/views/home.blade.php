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
                                            <input id="email" name="email" type="email" class="validate" required>
                                            <label for="first_name">Your e-mail</label>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div class="step-title waves-effect">Cardápio</div>
                                    <div class="step-content">
                                        <div class="row">
                                            <div class="input-field col s12">
                                            <input id="password" name="password" type="password" class="validate" required>
                                            <label for="password">Your password</label>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div class="step-title waves-effect">Finalizar pedido</div>
                                    <div class="step-content">
                                        Finish!
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn" type="submit">SUBMIT</button>
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
