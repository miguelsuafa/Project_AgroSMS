@extends('layouts.welcome_layout')

@section('content')
<div class="container mt-5">
    <!-- Sección de ¿A qué nos dedicamos? -->
    <div class="row mb-5">
        <div class="col-md-6">
            <h2 class="mb-3">¿A qué nos dedicamos?</h2>
            <p>Somos aprendices con ganas de dar soluciones a campesinos teniendo en cuenta las dificultades a la hora de buscar ayuda y no encontrar fácilmente soluciones.</p>
        </div>
        <div class="col-md-6">
            <img src="images/nosotros (5).png" alt="A qué nos dedicamos" class="img-fluid rounded">
        </div>
    </div>

    <!-- Sección de ¿Quiénes somos? -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="images/nosotros (4).png" alt="¿Quiénes somos?" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2 class="mb-3">¿Quiénes somos?</h2>
            <p>Somos unos aprendices capaces de brindar soluciones desarrollando software para ayudar a todas esas personas a tener una mejor articulación a sus problemas.</p>
        </div>
    </div>

    <!-- Sección de Misión, Visión y Objetivos -->
    <div class="row text-center mb-5">
        <div class="col-md-4">
            <div class="card-nts">
                <img src="images/nosotros (2).png" alt="Misión" class="card-img-top-nts">
                <div class="card-body">
                    <h4 class="card-title">Misión</h4>
                    <p class="card-text">Generar ayuda a los agricultores para que sus cultivos se le facilite el mantenimiento de sus cultivos a alguna planta en general.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-nts-m">
                <img src="images/nosotros (1).png" alt="Visión" class="card-img-top-nts">
                <div class="card-body">
                    <h4 class="card-title">Visión</h4>
                    <p class="card-text">Ser una web que genere ayuda a muchos del país o el mundo en general y poder brindar soluciones a los agricultores facilitando el mantenimiento de cultivos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-nts">
                <img src="images/nosotros (3).png" alt="Objetivo" class="card-img-top-nts">
                <div class="card-body">
                    <h4 class="card-title">Objetivo</h4>
                    <p class="card-text">Llegar a todos los agricultores con necesidades en sus cultivos y poder dar esa gran ayuda que muchas veces los agricultores necesitan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección del equipo de desarrollo -->
    <div class="row text-center mb-5">
        <div class="col-12">
            <h2 class="mb-4">Nuestro Equipo</h2>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/scalante.png" alt="Fabian Scalante" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Fabian Scalante</h4>
                    <p class="card-text">Desarrollador Full Stack<br>Experto en Laravel y Mysql</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-nts-m">
                <img src="images/fajardo.png" alt="Miguel Suarez" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Miguel Suarez</h4>
                    <p class="card-text">Desarrollador Full Stack<br>Experto en Laravel, Bootstrap y Mysql</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/monroy.png" alt="Duvan Monroy" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Duvan Monroy</h4>
                    <p class="card-text">Desarrollador Full Stack<br>Experto en Laravel y Mysql</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
        background-color: white;
        color: #333;
    }

    .container {
        padding: 2rem;
    }

    h1, h2 {
        font-size: 36px;
        font-weight: bolder;
        color: #a5a5a5;
        margin-bottom: 1rem;
        text-shadow: 0 8px 6px rgba(0, 0, 0, 0.3);
    }

    .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .card-nts-m {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .card-img-top-nts {
        width: 100%;
        height: auto;
        border-radius: 3px;
    }
    .card-img-top {
        width: 100%;
        height: auto;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-title {
        margin: 1rem 0;
        font-size: 16px;
        font-weight: bold;
        color: #a5a5a5;
        font-size: 1.5rem;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
    }

    .card-text {
        margin: 0.5rem 0;
        color: #555;
    }

    p {
        font-size: 1.1rem;
    }
</style>
@endsection
