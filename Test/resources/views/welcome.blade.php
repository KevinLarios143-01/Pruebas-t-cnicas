<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Styles -->
</head>

<body class="antialiased">
    <header>
        <nav class="navbar bg-body-tertiary">
            @if (Route::has('login'))
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="https://i.ibb.co/TkM65BZ/logo.png" alt="Logo" width="30" height="24"
                            class="d-inline-block align-text-top">
                        Bootstrap
                    </a>
                    @auth
                        <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="navbar-brand" href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a class="navbar-brand" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>
    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            <!--Section: Content-->
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>PRUEBA DE LARAVEL PHP.</strong></h4>
                        <p class="text-muted" style="text-align: justify">
                            Se instalaron algunos cosas para poder hacer funcionar el proyecto, como composer, nodejs,
                            algunas extensiones de sqlServer, y se instalo el paquete de laravel/ui para poder hacer
                            funcionar el login y el register. Se realizaron los migrates con el ORM de laravel.

                            <ul>
                                <li>
                                    Se utilizó el Eloquent ORM, se generaron los migrates para la creación de las tablas y su estructura.
                                    La tabla principal se llama pruebas.
                                </li>
                                <li>
                                    Se debe ejecutar el comando php artisan migrate para crear las tablas y poder generar un nuevo usuario
                                    para poder ingresar al sistema.
                                </li>

                            </ul>

                            Me disculpo por no haberlo terminado, pero no me dio tiempo ya que no había utilizado el ORM
                            directamente.
                        </p>
                    </div>
                </div>
            </section>
            <!--Section: Content-->
            <hr class="my-5" />
        </div>
    </main>
</body>

</html>
