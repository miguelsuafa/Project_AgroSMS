<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGRO SMS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Importación de fuentes */
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        /* Estilos generales */
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Colores predeterminados */
        :root {
            --bg-color: #1c1c1c;
            --font-color: #fff;
            --secondary-bg-color: #00ff37;
        }

        /* Comportamiento del scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Barra de navegación */
        #menuBarra {
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.5); 
            position: fixed; 
            top: 0;
            left: 0; 
            width: 100%; 
            z-index: 1000;
            opacity: 0;
            animation: fadeIn 2s forwards; /* Transición al cargar */
        }

        /* Animación para desvanecer el menú */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Color de los enlaces de la barra de navegación */
        #menuBarra ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease; /* Transición de color */
        }

        #menuBarra ul li a:hover {
            color: #00ff37;
        }

        /* Sección de inicio */
        .inicio-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.691)), url('images/fondo.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            opacity: 0;
            transition: opacity 0.5s ease-out 0.3s;
        }

        .inicio-section.loaded {
            opacity: 1;
        }

        /* Logo */
        .logo {
            max-width: 200px;
            margin-bottom: 20px;
            transition: 0.5s ease;
        }

        .titulo {
            font-family: 'Poppins', sans-serif;
            font-weight: 700; /* Grosor de la fuente */
            font-size: 48px;  /* Tamaño del texto principal */
            color: #ffffff; /* Color del texto */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra de texto */
            margin: 0;
        }

        /* Slogan */
        .slogan {
            font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Grosor de la fuente */
            font-size: 24px;  /* Tamaño del texto secundario */
            color: #ffffff; /* Color del texto */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra de texto */
            margin: 0;
            margin-top: 10px; /* Espacio entre el título y el slogan */
        }

        /* Estilos para las tarjetas (cards) */
        .card {
            transition: transform .3s; 
        }

        .card:hover {
            transform: scale(1.05); 
        }

        .card a {
            color: #f2f8ff; 
        }

        .card {
            margin-bottom: 20px;
        }

        .card img {
            max-width: 100%;
            height: auto;
        }

        .card a:hover {
            color: #000000; 
            text-decoration: none; 
        }

        .card .card-img-top {
            transition: transform .3s;
        }

        .card:hover .card-img-top {
            transform: scale(1.1);
        }

        /* Estilos generales del body */
        body {
            font-family: 'Roboto', sans-serif;
        }

        /* Sombras y transiciones en las tarjetas */
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-weight: bold;
        }

        /* Botón principal */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s; /* Transición de color */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        /* Nuevos estilos para mejorar el menú */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #fff;
            background: url('fondo.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Encabezado */
        .header {
            background: rgba(0, 0, 0, 0.6);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo */
        .logo img {
            width: 130px;
            height: 90px;
        }

        /* Menú */
        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            transition: all 0.3s ease; /* Transición para el menú */
        }

        .menu li {
            margin: 0 15px;
            position: relative;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s ease; /* Transición de color */
        }

        .menu li a:hover {
            color: #f0a500;
        }

        /* Toggle del menú */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 24px;
        }

        /* Introducción */
        .intro {
            text-align: center;
            margin-top: 20%;
            opacity: 0;
            animation: fadeIn 2s forwards; /* Transición al cargar */
        }

        .intro h1 {
            font-size: 48px;
            margin: 0;
            transition: color 0.3s ease; /* Transición de color */
        }

        .intro p {
            font-size: 24px;
            margin: 0;
            transition: color 0.3s ease; /* Transición de color */
        }

        .intro h1:hover,
        .intro p:hover {
            color: #f0a500;
        }

        /* Media query para dispositivos móviles */
        @media (max-width: 768px) {
            .menu {
                display: none;
                flex-direction: column;
                width: 100%;
                text-align: center;
                background: rgba(0, 0, 0, 0.8);
                position: absolute;
                top: 60px;
                left: 0;
            }

            .menu-toggle {
                display: block;
            }

            .menu.active {
                display: flex;
            }

            .menu li {
                margin: 10px 0;
            }
        }

        /* Estilos del loader */
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2000;
            transition: transform 0.5s ease, opacity 0.5s ease; /* Transición de ocultar */
        }

        .loader-container.hidden {
            transform: translateY(-100%); /* Transición hacia arriba */
            opacity: 0;
        }

        .loader {
            text-align: center;
            color: #fff;
            font-family: 'Righteous', cursive;
        }

        .loader img {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .loader p {
            animation: blink 1s infinite; /* Animación de parpadeo */
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

    /* Estilo para el botón flotante tipo barra de búsqueda */
        .floating-search-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff; /* Color primario */
            color: white;
            padding: 10px 30px;
            border-radius: 30px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra inicial */
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px; /* Espacio entre el icono y el texto */
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease; /* Transiciones */
            z-index: 1000;
            animation: zoomPulse 2s infinite; /* Animación de zoom constante */
        }

        .floating-search-btn:hover {
            text-decoration: none;
            transform: transition(3s);
            background-color: #0d291c; /* Color al pasar el mouse */
            box-shadow: 0 8px 16px rgb(1000, 1000, 1000, 0.2); /* Sombra más prominente al pasar el mouse */
            transform: scale(1.1); /* Efecto de zoom al pasar el mouse */
            color: white; /* Asegurarse de que el texto y el icono sigan siendo blancos */
        }

        /* Animación de zoom constante */
        @keyframes zoomPulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1); /* Zoom al 110% en el medio de la animación */
            }
        }


    </style>
</head>
<body>
    <!-- Loader -->
    <div class="loader-container" id="loader">
        <div class="loader">
            <img src="/images/logo.png" alt="Logo">
            <p>Cargando...</p>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg" id="menuBarra">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.png" width="65" height="60" class="d-inline-block align-top" alt="Logo"> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/biblioteca')}}">Biblioteca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contactanos') }}">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('https://forms.gle/NgrDHqAhek8goGGD9') }}" target="_blank">Ayudanos a mejorar <i class="fa-regular fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg bg-success rounded" href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    @livewireScripts

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Custom JS for loader -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.getElementById("loader");
            const content = document.querySelector(".inicio-section");

            function hideLoader() {
                loader.classList.add("hidden");
                content.classList.add("loaded");
            }

            setTimeout(hideLoader, 200); // Esconde el loader después de 2 segundos
        });
    </script>

    
</body>
</html>
