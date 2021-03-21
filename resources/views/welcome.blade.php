<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Menu Movil</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">


</head>

<body>
    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
    <nav class="navbar navbar-expand-md barra">
        <!-- Brand -->
        <a class="navbar-brand logo" href="/">Tu Menu</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <section></section>
    <section class="fifth-home-section col-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Crea tu <span class="text-rosado">menú digital </span>  <span class="orange-bg">en 3 pasos</span></h1>
        <br>
        <div class="content">
            <div class="steps-gallery slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
                        <div class="step slick-slide slick-current slick-active" data-slick-index="0"
                            aria-hidden="false" tabindex="0" style="width: 309px;">
                            <img src="/img/step-1.png"
                                alt="paso1">
                            <p>
                                Crea tu usuario, registra el nombre de tu negocio, número de contacto, entre otros
                                detalles.
                            </p>
                        </div>
                        <div class="step slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0"
                            style="width: 309px;">
                            <img src="/img/step-2.png"
                                alt="paso2">
                            <p>
                                Crea tu menú digital con nuestras plantillas personalizables.
                                Edita la descripción y elige las fotos de tus platos y bebidas.
                            </p>
                        </div>
                        <div class="step slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0"
                            style="width: 309px;">
                            <img src="/img/step-3.png"
                                alt="paso3">
                            <p>
                                Visualiza y descarga el QR Code, listo para ser impreso o envíalo a tu correo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="cta">
            <a href="{{ route('paso1')}}" class="btnCreaTuMenu"> Crea tu menú </a>
        </div>
        
    </section>
    {{-- <footer>ELON SAS Todos los derechos reservados {{ date('Y')}}</footer> --}}


</body>

</html>
