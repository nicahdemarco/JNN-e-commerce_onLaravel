@extends('layouts.app')
@extends('ProductController.php')


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
            <h3 class="carousel"><a href="{{route('women')}}">Coleccion verano para damas</a></h3>
            <h5>Para este verano, debes estar a la moda con Dani-Herni</h5>
        </article>
        </article>
        <article class="carousel-item">
        <img class="d-block w-100 height: 200px carousel" src="{{asset('images/tshirt4.png')}}" alt="Second slide">
        <article class="carousel-caption d-none d-md-block">
        <h3 class="carousel"><a href="{{route('men')}}">Coleccion verano para caballeros</a></h3>
        <h5>Para este verano, debes estar a la moda con Dani-Herni</h5>
        </article>
        </article>
        <article class="carousel-item">
        <img class="d-block w-100 height: 200px carousel" src="{{asset('images/tshirt3.png')}}" alt="Third slide">
        <article class="carousel-caption d-none d-md-block">
            <h3 class="carousel"><a href="{{route('kids')}}">Coleccion verano para los consentidos</a></h3>
            <h5>Para este verano, debes estar a la moda con Dani-Herni</h5>
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

<div class="container contenedor-productos">
		<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productos" id="productos1">

			<article class="col-xs-12 product-card">
				@foreach ($products as $product)
					<a href="Product.php">
						<div class="photo-container">
						</div>
					</a>
					@foreach ($product as $pro)
						

							<div class="descripcion">
								
							</div>

						
					@endforeach

				@endforeach
			</article>

		</section>

	</div>

<!-- <div class='container-fluid p-5 bg-light'> 
    <div class="container marketing"> -->
        <!-- Three columns of text below the carousel -->
        <!-- <article class="row">
            <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-1.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Ropa de moda</h2>
                <p> ¡La mejor Ropa de Moda se encuentra en Dani-Herni!
                    Si estás buscando la mejor alternativa para vestirte a la moda, llegaste a sitio indicado. En nuestra tienda online podrás encontrar lo último en Ropa de Moda. Ya sea para Invierno o Verano, nosotros tenemos los mejores diseños para que los puedas lucir de la mejor manera.</p>
                <p><a class="btn btn-dark" href="#" role="button">Ver más&raquo;</a></p> -->
            <!-- </section>/.col-lg-4 -->
            <!-- <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-2.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Revista virtual</h2>
                <p>Si queres enterarte de novedades sobre Dani-Herni, te invitamos a que te sumes a nuestro repositorio público, donde podras encontrar todo lo que requeires para actualizar tus conocimientos sobre Programación Web Full Stack https://github.com/danielfuentes no te olvides darnos una estrellita.</p>
                <p><a class="btn btn-dark" href="#" role="button">Ver más&raquo;</a></p> -->
            <!-- </section> /.col-lg-4 -->
            <!-- <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-3.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Preguntas frecuentes</h2>
                <p>Si posees alguna duda sobre Dani-Herni, con respecto a los servicios que te ovfrecemos,  no dudes primero que nada de revisar nuestra sección de preguntas frecuentes las cuales todos los días la actualizamos y así te danmos un mejor servicio, para que estes al día con la moda.</p>
            <p><a class="btn btn-dark" href="{{route('faqs')}}" role="button">Ver más&raquo;</a></p> -->
            <!-- </section>/.col-lg-4 -->
        <!-- </article>/.row -->
    <!-- </div>
</div> -->
@endsection