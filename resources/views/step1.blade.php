<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paso 1</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">


</head>

<body>
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
    <div class="row cajaPasos">
        <div class="col-xs-8 offset-xs-2 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-10 offset-lg-1">
            <div class="step-counter">
                <h1 class="tw-text-4xl tw-text-center">Completa los<br><span>siguientes pasos</span></h1>
                <div class="info-steps">
                    <ul class="tw-mx-auto">
                        <li class="active">
                            <img src="/img/step-1.png">
                            <p>Crea tu usuario</p>
                        </li>
                        <li>
                            <img src="/img/step-2-g.png">
                            <p>Completa tus datos</p>
                        </li>
                        <li>
                            <img src="/img/step-3-g.png">
                            <p>Escoge tu plantilla</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-container-bg no-padding-panel">
                <h2 class="tw-text-3xl tw-text-center">Crea tu usuario a continuación</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    {{-- <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="input-group col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputLabel">Nombre</span>
                            </div>
                            <input type="text" aria-label="First name" class="form-control input">
                        </div>
                        <div class="input-group col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputLabel">Email</span>
                            </div>
                            <input type="text" aria-label="First name" class="form-control input">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-group col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputLabel">Nombre del negocio</span>
                            </div>
                            <input type="text" aria-label="First name" class="form-control input">
                        </div>
                        <div class="input-group col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputLabel">Telefono</span>
                            </div>
                            <input type="text" aria-label="First name" class="form-control input">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-group col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputLabel">Contraseña</span>
                            </div>
                            <input type="text" aria-label="First name" class="form-control input">
                        </div>
                        <div class="input-group col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputLabel">Confirmar-Contraseña</span>
                            </div>
                            <input type="text" aria-label="First name" class="form-control input">
                        </div>
                    </div>
                    <br>
                    <div class="cta">
                        <a href="{{ route('paso2')}}" class="btnContinuar"> Continuar </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
