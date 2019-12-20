<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('titulo')
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/productos.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/master.css')}}">


    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
</head>
<body>

    @yield('assets')
    
    <nav class="navbar navbar-expand-lg w-100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <a class="navbar-brand" href={{route('main')}}>
                <img src="images/tshirt.png" width="40" height="40" alt="logo">
            </a>

            <div class="input-group mb-3">
                <input type="text" class="form-control" action={{route('product.search')}} method="get" placeholder="Buscar" aria-label="buscar" aria-describedby="basic-addon2">
            </div>
            @guest
            <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#cuenta">
                <a href={{route('login')}}>{{__('Ingresar')}}</a>
            </button>
                @if(Route::has('register'))
                <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#registro">
                    <a href={{route('register')}}>{{__('Registrate')}}</a>
                </button>
                @endif
            @else 
                @if (Auth::user()->role==7)
                    <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#registro">
                        <a href=#>{{__('Administrar')}}</a>
                    </button>
                <section class="">
                    <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#registro">
                        <a href={{route('products.index')}}>{{__('Productos')}}</a>
                    </button>

                    <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#registro">
                        <a href={{route('users.index')}}>{{__('Usuarios')}}</a>
                    </button>
                </section>
                @endif
                {{-- Hacia el carrito --}}
            <a class="carrito-de-compras" href={{route('cart')}}>
                <img src="images/tcart.png" width="40" height="40" data-toggle="tooltip" data-placement="top" title="Carrito de compras" alt="carrito de compras">
            </a>

            <section class="dropdown">
                <span id="" href='#'>{{ Auth::user()->name }}</span>

                <button class="btn btn-outline-light btn-round"  style=" border-style: none;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src={{asset(Auth::user()->avatar)}} class="avatar dropdown-toggle" style="height:40px; width:40px; border-radius: 50%;" alt="avatar de usuario">   
                </button>  
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">     
                    <a class="dropdown-item" href="{{ route('profile')}}">Perfil</a>
                    <a class="dropdown-item" href="{{ route('logout')}}">Logout
                        <script>
                            onclick="event.preventDefault()";
                                document.getElementById("logout-form").submit();
                        </script> 
                    </a>
                </div>

                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
                    @csrf
                </form>
                
            </section>
            @endguest

        </div>
    </nav>

    @yield('content')
    
    {{-- footer --}}
    <footer class="col-md-12 main-footer row">
        <div>
            <ul class="col-md-12 redeslist lista">
                <li><h5>REDES SOCIALES</h5></li>

                <li><hr class="accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;"></li>

                <span><a href=""><i class="fab fa-facebook-f white-text mr-1 fa-2x"></i></a></span>
                <span><a href=""><i class="fab fa-twitter white-text mr-1 fa-2x"> </i></a></span>
                <span><a href=""><i class="fab fa-instagram white-text mr-1 fa-2x"> </i></a></span>
            </ul>
        </div>

        <div>
            <ul class="col-md-12 lista">
                <li><h5>METODOS DE PAGO</h5></li>

                <li><hr class="accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;"></li>

                <span><a href="#" target="_blank"><img src="images/Visa_Logo.png" class="mr-1 logos" width="40px"></i></a></span>
                <span><a href="#" target="_blank"><img src="images/mastercard.png" class="mr-1" width="40px"></a></span>
                <span><a href="#" target="_blank"><img src="images/pagofacil.png" class="mr-1" width="40px"></a></span>
                <span><a href="#" target="_blank"><img src="images/paypal.png" class="mr-1" width="40px"></a></span>
            </ul>
        </div>

        <div>
            <ul class="col-md-12 lista">
                <li><h5>ENVIOS</h5></li>
                <li><hr class="accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;"></li>

                <span><a href="#" target="_blank"><img src="images/oca.png" class="mr-1 logos" width="40px"></a></span>
                <span><a href="#" target="_blank"><img src="images/logo-mercadoenvios.png" class="mr-1 logos" width="40px"></a></span>
                <span><a href="#" target="_blank"><img src="images/correoarg.png" class="mr-1 logos" width="40px"></a></span>
            </ul>
        </div>

        <div>
            <ul class="col-md-12 lista">
                <li><h5>CONTACTO</h5></li>

                <hr class="accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <li class="contactlist_item"><a href="FAQ.php" target=""><i class="fas fa-question"></i>Preguntas frecuentes</a></li>
                <li class="contactlist_item"><a href="mailto:consultas@jnn.com.ar" target="_blank"><i class="fas fa-envelope"></i>consultas@jnn.com.ar</a></li>
                <li class="contactlist_item"><a href="https://www.google.com.ar/maps/place/Av.+Monroe+860,+Buenos+Aires/@-34.5488518,-58.4458325,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcb436f18dc22f:0x36090a5d367889c6!8m2!3d-34.5488518!4d-58.4436438" target="_blank"><i class="fas fa-map-marker-alt"> </i>Belgrano (CABA)</a></li>
                <li class="contactlist_item"><a href="tel:+54666666"><i class="fas fa-phone-square-alt">  +54 666 666</i></a></li>
            </ul>
        </div>
        
        <hr class="mt-0 d-inline-block mx-auto " style="width:95%;">
    
        <div class="pie">
            <ul>
                <span class="mr-3">Copyright © 2019 - JNN - Todos los derechos reservados</span>
                <span class="mr-1"><a href="#">Términos y Condiciones</a> |</span>
                <span class="mr-1"><a href="#">Politicas de Privacidad</a> |</span>
                <span class="mr-1"><a href="#">Ayuda</a></span>
            </ul>
        </div>
    </footer>   


    <!-- BOOTSTRAP 4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
