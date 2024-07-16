@extends('layouts.welcome_layout')

<!-- CDN de Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- CDN de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Estilos adicionales -->
<style>
    .social-icons {
        margin-top: 20px;
    }
    .social-icons a {
        color: white;
        margin: 0 10px;
        font-size: 1.5em;
        transition: color 0.3s ease;
    }
    .social-icons a:hover {
        color: #1e7e34;
    }
</style>

<!-- Section de inicio -->
<section class="inicio-section">
    <div class="text-center">
        <img src="images/logo.png" alt="Logo Grande" class="logo">
        <h1 style="color: white;" class="titulo">AGRO S.M.S</h1>
        <p class="slogan">"Programando éxito, cosechando innovación"</p>
        <!-- Botón Flotante -->
        <a href="{{url('/biblioteca')}}" class="floating-search-btn">
        <i class="fas fa-search"></i> Buscar Enfermedades y Plagas de Plantas</a>
        <!-- Iconos de Redes Sociales -->
         <p>Apoyanos en nustras Redes Sociales: </p>
        <div class="social-icons">
            <a href="https://www.facebook.com/duvan.monrroybermudez?mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/fabian_scalante?igsh=NTc4MTIwNjQ2YQ==" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://x.com/Miguela59090296" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
</section>



