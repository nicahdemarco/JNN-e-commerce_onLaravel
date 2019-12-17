@extends('layouts.app')
@section('assets')
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
                <h1 class="mb-5" style="font-size:3rem,font-weight:300">Nueva colección verano, descubrila en <strong>JNN</strong></h1>
            </article>
        </article>

        <article class="carousel-item">
            <img class="d-block w-100 height: 200px carousel" src="{{asset('images/tshirt4.png')}}" alt="Second slide">
            <article class="carousel-caption d-none d-md-block">
                <h1 class="mr-5">Todo naranaja!</h1>
            </article>
        </article>

        <article class="carousel-item">
            <img class="d-block w-100 height: 200px carousel" src="{{asset('images/tshirt3.png')}}" alt="Third slide">
            <article class="carousel-caption d-none d-md-block">
                <h1>Nueva colección</h1>
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
        <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productos flex-wrap" id="productos1">
            @foreach ($products as $product)
                <article class="col-xs-12 product-card">
                    <a href="Product.php">
                        <div class="photo-container">
                            <img src="{{asset('storage/products/'.$product->nombre. '.jpg') }}" alt="remera">
                        </div>
                    </a>
                    
                    <div class="descripcion">
                        <h4>{{$product->precio}}</h4>
                        <p>{{$product->descripcion}}</p>
                    </div>
                        
                </article>
            @endforeach
        </section>
    </div>

@endsection