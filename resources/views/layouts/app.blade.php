<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Token CSRF para seguridad -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fuentes -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Estilos -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>
<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    .sidebar {
        min-height: 100vh; /* Altura mínima de la barra lateral */
        background-color: #343a40; /* Color de fondo de la barra lateral */
        color: #fff; /* Color de texto de la barra lateral */
    }
    /* .backg-fond {
        background-image:url(images/negro_piedra.png);
        background-size:cover;
        background-repeat: no-repeat;
        background-attachment: size;
    } */
    .name {
    font-size: 20px;
    font-weight: bold; /* Agrega grosor a la letra */
    background-image: url(images/fondo.jp); /* Agrega una imagen de fondo */
    background-clip: text; /* La imagen solo se mostrará en el área del texto */
    -webkit-background-clip: text; /* Para navegadores webkit */
    color: transparent; /* Hace que el color del texto sea transparente para que solo se vea la imagen */
    }
    .sidebar a {
        color: #adb5bd; /* Color de los enlaces en la barra lateral */
        display: flex;
        align-items: center;
        padding: 10px 15px;
    }
    .sidebar a:hover {
        color: #fff; /* Color de los enlaces al pasar el ratón */
        text-decoration: none;
    }
    .sidebar .nav-link.active {
        background-color: #495057; /* Color de fondo del enlace activo */
    }
    .sidebar .nav-link i {
        margin-right: 10px;
    }
    .navbar-brand, .navbar-nav .nav-link {
        color: #fff !important; /* Color de los enlaces en la barra de navegación */
    }
    .navbar-nav .nav-link {
        padding: 0 15px;
    }
    .main-content {
        margin: 10px; /* Margen izquierdo para dar espacio a la barra lateral */
        padding: 20px;
    }
    @media (max-width: 768px) {
        .main-content {
            margin-left: 0; /* Sin margen izquierdo en pantallas pequeñas */
        }
        .sidebar {
            position: absolute;
            z-index: 1000;
            transform: translateX(-250px); /* Oculta la barra lateral fuera de la vista */
            transition: transform 0.3s ease; /* Animación suave para mostrar/ocultar */
        }
        .sidebar.active {
            transform: translateX(0); /* Muestra la barra lateral */
        }
    }
    .hamburger-menu {
        cursor: pointer; /* Cambia el cursor al pasar sobre el menú de hamburguesa */
    }
    .custom-alert {
        font-size: 1.2rem; /* Tamaño de fuente personalizado para alertas */
    }
    /* Estilos para el menú colapsado */
    .sidebar-collapsed .nav-link span {
        display: none; /* Oculta el texto de los enlaces en la barra lateral colapsada */
    }
    .sidebar-collapsed .nav-link i {
        font-size: 1.5rem; /* Aumenta el tamaño de los iconos en la barra lateral colapsada */
    }
    .sidebar-collapsed .navbar-brand {
        display: none; /* Oculta el nombre de la marca en la barra lateral colapsada */
    }
    .sidebar-collapsed .navbar-brand-logo {
        display: block; /* Muestra el logo de la marca en la barra lateral colapsada */
    }
    .navbar-brand-logo {
        display: none; /* Oculta el logo de la marca por defecto */
    }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <!-- Menú de hamburguesa para colapsar/expandir la barra lateral -->
                <span class="navbar-brand hamburger-menu" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </span>
                <a class="navbar-brand name" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="navbar-brand-logo" href="{{ url('/') }}">
                    <img src="images/logo.png" alt="Logo" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Lado izquierdo de la barra de navegación -->
                    <ul class="navbar-nav mr-auto"></ul>

                    <!-- Lado derecho de la barra de navegación -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Enlaces de autenticación -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex">
            <!-- Barra lateral -->
            <nav class="sidebar bg-dark">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">
                                <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('plants.index') }}">
                                <i class="fas fa-seedling"></i> <span>Plantas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('plants.create') }}">
                                <i class="fas fa-plus"></i> <span>Agregar Planta</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('config.index') }}">
                                <i class="fas fa-cogs"></i> <span>Configuración</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="main-content w-100 backg-fond">
                <!-- Contenido principal -->
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

    <script>
        // Función para mostrar/ocultar la barra lateral
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
            sidebar.classList.toggle('sidebar-collapsed');
        }
    </script>
    @yield('scripts') <!-- Sección para incluir scripts adicionales -->
</body>
</html>
