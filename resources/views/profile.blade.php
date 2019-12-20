@extends('layouts.app')
@section('assets')

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Perfil</title>
	{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
		<link rel="stylesheet" href="css/profile.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/header.css"> 
@endsection

@section('content')

	<main class="container target my-5">
			
		<section class="row">
			<section class="col-sm-2"><a href="" class="pull-sright"><img id="avatar" title="profile image" class="img-circle img-responsive" src="{{asset(Auth::User()->avatar)}}"></a></section>
			<article class="col-sm-10">
			<h1 class="">{{Auth::User()->name . " " . Auth::User()->lname}}</h1>
			<a  href="{{route('edit', Auth::User()->id)}}" class="btn btn-warning">Editar perfil</a> 
			</article>
		</section>
		<hr>
		<section class="row">
			<article class="col-sm-4">
				<!--left col-->
				<ul class="list-group">
					<li class="list-group-item text-muted" contenteditable="false">Perfil</li>
					<li class="list-group-item text-right"><span class="pull-left"><strong class="">Nombre: </strong></span>{{Auth::User()->name . " " . Auth::User()->lname }}</li>
					<li class="list-group-item text-right"><span class="pull-left"><strong class="">Email: </strong></span>{{Auth::User()->email}}</li>
					<li class="list-group-item text-right"><span class="pull-left"><strong class="">Sexo: </strong></span>{{Auth::User()->genre}}</li>
					<li class="list-group-item text-right"><span class="pull-left"><strong class="">Lugar de Residencia: </strong></span>{{ Auth::User()->municipio}}</li>
				</ul>
			</article>

			<div class="col-sm-8 align-self-center m-xs-5" contenteditable="false">
				<div class="panel panel-default">

				<section class="panel panel-default target">
					<span class="panel-heading" contenteditable="false"><b>Tu Carrito</b></span>
						<article class="panel-body d-flex justify-content-center ">
							<article class="row">
								@if (session()->get("user.cart"))
								@foreach (session()->get("user.cart") as $product)
								<div class="col-md-4">
									<section class="thumbnail">
										<img style="width:200px;height:300px;" src="{{$product['image']}}">
										<article class="caption">
											<h3>
												{{$product['name']}}
											</h3>
											<p>
												{{$product['description']}}
											</p>
										</article>
									</section>
								</div>
								@endforeach
								@else
								<h2>Tu carrito esta vacio <a href="{{route('main')}}">volvamos a llenarlo!!</a></h2>
								@endif
							</article>
						</article>
				</section>
			</section>
			<hr>
	</main>

@endsection