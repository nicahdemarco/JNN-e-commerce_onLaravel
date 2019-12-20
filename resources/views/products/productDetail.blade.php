@extends('layouts.app')



@section('assets')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<link rel="stylesheet" href="{{asset('css/reset.css')}}">
@endsection


@section('content')
	<body>

		<div class="container detalle-container ">
			<div class="row">
				<section class="detalle-producto d-xs-flex">
				
					<article class="col-md-6 col-sm-12 col-xs-12 detalle-imagen">
						<section class="tab-pane active justify-content-center" style="margin:20%"id="pic-1">
							<img class="asd" src="{{asset('storage/products/'.$product->nombre.'.jpg')}}" />
						</section>

						<div class="row d-flex botones justify-content-center mb-5">
							<input href="#main.blade.php" class="btn btn-primary" type="submit" value="Continuar comprando">
						</div>
					</article>
						{{-- @dd($product) --}}
					<aside class="col-md-6 col-sm-12 col-xs-12 detalle-descripcion">
						<h3 class="product-title">{{$product->nombre}}</h3>
						<h3 class="product-description title">{{$product->descripcion}}</h3>
						<h2 class="price">PRECIO: <span>${{$product->precio}}</span></h2>
						{{-- <h3 class="frase">Frase: ipsum dolor sit amet co blanca</h3> --}}
						<p class="texto-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus exercitationem, beatae quo quibusdam ipsa repudiandae possimus aperiam unde nam?
						</p>
						<div class="select">TALLE</div>
						<div class="d-flex mb-4">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">S</label>
								</div>
								<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">M</label>
								</div>
								<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
								<label class="form-check-label" for="inlineCheckbox3">L</label>
							</div>
							</div>
						<div class="select">COLOR</div>
						<div class="d-flex mb-4">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="BLANCO">
								<label class="form-check-label" for="inlineCheckbox1">BLANCO</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NEGRO">
								<label class="form-check-label" for="inlineCheckbox2">NEGRO</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="GRIS">
								<label class="form-check-label" for="inlineCheckbox3">GRIS</label>
							</div>
						</div>

						<div class="qty my-4">
							<span class="minus signos">-</span>
							<input type="number" class="count signo" name="qty" value="1">
							<span class="plus signos">+</span>
						</div>
						
						<div class="row d-flex botones">
							<form action="" method="post">
								<input type="hidden" name="id" id="id" value="<?= $product['id'];?>">
								<input type="hidden" name="nombre" id="nombre" value="<?= $product['nombre'];?>">
								<input type="hidden" name="precio" id="precio" value="<?= $product['precio'];?>">
								<input type="hidden" name="cantidad" id="cantidad" value="<?= 1;?>">
								
								<a href={{route('cart.add', $product->id)}}></a>
								<input class="btn btn-primary" name="btnAccion" type="submit" value="Agregar al carrito">
							</form>
						</div>
						
					</aside>

				</section>
			</div>
		</div>

	</body>
</html>
@endsection