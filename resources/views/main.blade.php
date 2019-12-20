@extends('layouts.app')
@section('assets')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
    <style>
        .carousel-inner {
            text-shadow: 1px 1px #000;
        }
        .carousel{
            height : 40vh;
        }
    </style>
@endsection

@section('content')  
<!-- carrusel  -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <section class="carousel-inner carousel"  >
        <article class="carousel-item active ">
            <img class="d-block w-100 carousel" src="{{asset('images/tshirt1.png')}}" alt="First slide">
            <article class="carousel-caption d-none d-md-block">
                <h1 class="mb-5 ml-5" style="font-size:2.5rem;font-weight:300">Nueva colección verano, <br> descubrila en <strong>JNN</strong></h1>
            </article>
        </article>

        <article class="carousel-item">
            <img class="d-block w-100 height: 200px carousel" src="{{asset('images/tshirt4.png')}}" alt="Second slide">
            <article class="carousel-caption d-none d-md-block">
                <h1 class="ml-5 mb-5">Todo naranja!</h1>
            </article>
        </article>

        <article class="carousel-item">
            <img class="d-block w-100 height: 200px carousel" src="{{asset('images/tshirt3.png')}}" alt="Third slide">
            <article class="carousel-caption d-none d-md-block">
                <h1>Disfruta con amigos</h1>
            </article>
        </article>
    </section>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- metodos de pago -->
<section class="banner">
    <div class="col-md-3 col-sm-12 col-xs-12 metodos"><i class="far fa-credit-card"></i>Tarjetas de crédito</div>
    <div class="col-md-3 col-sm-12 col-xs-12 metodos"><i class="far fa-credit-card"></i>Tarjetas de débito</div>
    <div class="col-md-3 col-sm-12 col-xs-12 metodos"><i class="fas fa-money-bill"></i>Efectivo y transferencia</div>
    <div class="col-md-3 col-sm-12 col-xs-12 metodos"><i class="fas fa-shipping-fast"></i>Envíos a todo el país</div>
</section>
<!-- Productos -->
    <div class="container contenedor-productos d-flex">
        <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productos flex-wrap flex-xs-wrap" id="productos1">
            @foreach ($products as $product)
                <article class="col-xs-12 product-card">
                    <a href="{{ ('/productDetail/'.$product->id) }}">
                        <div class="photo-container">
                            <img src="{{asset('storage/products/'.$product->nombre. '.jpg') }}" alt="remera">
                        </div>
                    </a>
                    
                    <div class="descripcion">
                        <h4>${{$product->precio}}</h4>
                        <p>{{$product->descripcion}}</p>
                    </div>
                        
                </article>
            @endforeach
        </section>
    </div>

    <section id="newsletter" class="col-md-12 w-100 mails">
		<h3 class="susc mx-5">subscribite para recibir novedades</h3>
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="tu email" aria-label="Recipient's username" aria-describedby="button-addon2">
			<div class="input-group-append">
				<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-paper-plane"></i></button>
			</div>
		</div>
	</section>

	<section class="col-md-12 promos">
		<div class="col-md-6 col-sm-12 promo-content">
            <a href="#newsletter">
                <article class="promo1">
                    <h3>Suscribite y obtene <br> descuentos increíbles </h3>
                </article>
			</a>
		</div>

		<div class="col-md-6 col-sm-12 promo-content">
			<a href="faqs">
				<article class="promo2">
					<h3>FAQ's<br>Preguntas frecuentes</h3>
				</article>
            </a>
            <a href="#newsletter">
                <article class="promo3">
                    <h3>Sugerinos mas frases !!!</h3>
                </article>
            </a>
		</div>

	</section>

@endsection