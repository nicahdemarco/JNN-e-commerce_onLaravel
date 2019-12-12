<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    @yield('assets')
</head>
<body>
    <div id='top-navbar-main' class='container-fluid p-0'>
        {{-- <nav class="navbar navbar-expand-md">
            <section class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fas fa-home"></i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <i class="fas fa-bars"></i>
                </button>

                <article class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                @endif
                            </li>
                        @else
                            @if (Auth::User()->role == 7)
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Administrar') }}<span class="caret"></span>
                                </a>

                                <section class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('products.index')}}">{{ __('Productos') }}</a>
                                    <a class="dropdown-item" href="{{route('users.index')}}">{{ __('Usuarios') }}</a>
                                </section>
                            </li>
                            @endif
                            <li class='nav-item'>
                                <a class='nav-link' href={{route('cart')}}><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <section class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <img src={{asset(Auth::user()->avatar)}} class="avatar">
                                    <a class="dropdown-item" href="{{ route('profile') }}">Perfil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </section>
                            </li>
                        @endguest
                    </ul>
                </article>
            </section>
        </nav> --}}
        <nav class="navbar navbar-expand-lg w-100">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <a class="navbar-brand" href="index.php">
            <img src="images/tshirt.png" width="40" height="40" alt="logo">
        </a>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar" aria-label="buscar" aria-describedby="basic-addon2">
        </div>

        <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#registro">
            <a href="registro.php">Crear cuenta</a>
        </button>

        <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#cuenta">
            <a href="login.php">Ingresar</a>
        </button>

    
        
        <a class="carrito-de-compras" href="carrito.php">
            <img src="images/tcart.png" width="40" height="40" data-toggle="tooltip" data-placement="top" title="Carrito de compras" alt="carrito de compras">
            (<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);?>) 
        </a>
    </div>
</nav>
    </div>

    <header id="main-header" class="main-header">

        <div class='container-fluid title-background'>
            <!-- titulo -->
            <section class="page-title">
                <h1>DANI-HERNI</h1>
            </section>

            <!-- search -->
            <form action={{route('product.search')}} method="get">
                <article class="bottom-header-search form-group">
                    <input type="text" name="busqueda" placeholder="Buscar...">
                    <button type="submit" name="search-submit" ><i class="fas fa-search"></i></button>
                </article>
            </form>
        </div>

        <nav class="main-nav">
            <a href={{route('main')}}>Inicio</a>
            <a href="{{route('women')}}">Damas</a>
            <a href="{{route('men')}}">Caballeros</a>
            <a href="{{route('kids')}}">Niños</a>
            <a href="{{route('faqs')}}">Preguntas frecuentes</a>
        </nav>

    </header>


    @yield('content')


    <div class='container-fluid p-0'>
        <footer class="main-footer">
            <nav>
                <article class="column-1 footer-article">
                    <h3>Empresa</h3>
                    <a href="#" class="link">Acerca de nosotros</a>
                    <a href="#" class="link">Notiacias</a>
                    <a href="#" class="link">Moda</a>
                </article>

                <article class="column-2 footer-article">
                    <h3>Ayuda</h3>
                    <a href="#" class="link">Contacto
                    <a href="mailto:cedavilu@gmail.com"?subjet="Mensaje desde el sitio web" class="contact-logo"><i class="fas fa-envelope-square i"></i></a>
                </article>

                <article class="column-3 footer-article">
                    <h3>Redes sociales</h3>
                    <section class="social-network">
                        <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="http://Twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        <a href="http://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    </section>
                </article>

                <article class="column-4 footer-article">
                    <h3>Información</h3>
                    <a href="#" class="link">Revista Virtual</a>
                </article>
            </nav>

            <section id='backtop' class="backtop">
                <a href="#main-header"><i class="fas fa-angle-double-up"></i></a>
            </section>
        </footer>
    </div>



    <!-- BOOTSTRAP 4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
