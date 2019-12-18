@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/faq.css')}}">
@endsection

@section('content')
<div class="container-fluid mb-3">

    <main id="main" class="main-container">
        <div class="faq accordion" id="accordionExample">
            <br>   
            <h1 class="tituloFaq">Preguntas Frecuentes</h1>
            <br>   
            <br>
            <div class="card_faq">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cuáles son las formas de pago?
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="response card-body">
                        <ol class="response">
                            <li>Tarjeta de crédito Visa o MasterCard.</li>
                            <li>Transferencia a traves de PayPal.</li>
                            <li>En efectivo a través de Pago Fácil, para lo que tendrás que imprimir el cupón en nuestra página al momento de realizar tu compra.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card_faq">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Hay cargo extra por abonar con tarjeta de crédito?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="response card-body">
                        No.
                    </div>
                </div>
            </div>
            <div class="card_faq">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Puedo enviar a otra persona a retirar el paquete por sus puntos de entrega?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="response card-body">
                        Si.
                    </div>
                </div>
            </div>
            <div class="card_faq">
                <div class="card-header" id="">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Hacen envíos? 
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="response card-body">
                        Sí, a todo el país a través de OCA, Mercado Envios o Correo Argentino. El costo es calculado a través de dos variables: localidad del envío y peso de la orden. Esto significa que abonarás un sólo envío, independientemente de la cantidad de artículos que compres. 
                    </div>
                </div>
            </div>
            <div class="card_faq">
                <div class="card-header" id="">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ¿Hay un monto mínimo de compra?
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="response card-body">
                    No.
                    </div>
                </div>
            </div>
            <div class="card_faq">
                <div class="card-header" id="">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        ¿Puedo pagar contrarrembolso?
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="response card-body">
                    No, tanto el valor de tu compra como el costo del envío se abonan al hacer tu pedido en nuestra tienda.
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection