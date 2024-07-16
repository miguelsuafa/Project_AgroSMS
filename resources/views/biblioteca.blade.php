@extends('layouts.welcome_layout')

    <!-- Imagen de banner -->
    <div class="content">
        <img src="{{ asset('images/banner_biblioteca.png') }}" alt="Banner Biblioteca">
    </div>
    
@section('content')
<style>
    /* Imagen de banner */
    .content img {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    /* Estilo para las tarjetas de plantas */
    .plant-card {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
        color: #23262e;
        background-color: #fff;
    }

    .plant-card:hover {
        transform: scale(1.02);
    }

    .plant-card img {
        width: 100%;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        height: 200px;
        object-fit: cover;
    }

    .plant-card .card-content {
        padding: 15px;
    }

    .plant-card h3 {
        margin-top: 10px;
        margin-bottom: 10px;
        color: #23262e;
        font-size: 1.25em;
    }

    .plant-card p {
        margin: 5px 0;
        color: #23262e;
    }

    .plant-card a {
        text-decoration: none;
        color: inherit;
    }

    .plant-card a:hover {
        text-decoration: none;
        color: inherit;
    }

    .search-info {
        margin-bottom: 20px;
        font-size: 1.1em;
        color: #555;
    }

    .input-group-append button {
        background-color: #28a745;
        color: white;
    }

    .input-group-append button:hover {
        background-color: #218838;
    }

    .icon-container {
        display: flex;
        align-items: center;
        margin-top: 5px;
    }

    .icon-container i {
        margin-right: 10px;
        color: #28a745;
    }

    .icon-container p {
        margin: 0;
        color: #23262e;
    }
</style>

<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="container">
    <h1>Biblioteca de Plantas</h1>

    <!-- Información sobre el buscador -->
    <div class="search-info">
        Utiliza el buscador para encontrar información sobre diferentes plantas y las enfermedades que las afectan. Puedes buscar por el nombre de la planta o por el nombre de la enfermedad.
    </div>

    <!-- Formulario de búsqueda -->
    <form action="{{ route('search') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Buscar plantas..." value="{{ request()->input('query') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </div>
    </form>

    <!-- Resultados de la búsqueda -->
    @if(isset($plants))
        <h2>{{ isset($query) ? "Resultados de la búsqueda para \"$query\"" : "Todas las Plantas" }}</h2>
        @if($plants->isEmpty())
            <p>No se encontraron resultados.</p>
        @else
            <div class="row">
                @foreach($plants as $plant)
                    <div class="col-md-4">
                        <div class="plant-card">
                            <a href="{{ route('plants.details', $plant->id) }}">
                                @if ($plant->image)
                                    <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}">
                                @else
                                    <img src="{{ asset('images/default-plant.jpg') }}" alt="{{ $plant->name }}">
                                @endif
                                <div class="card-content">
                                    <div class="icon-container">
                                        <i class="fas fa-seedling"></i>
                                        <h3>{{ $plant->name }}</h3>
                                    </div>
                                    <div class="icon-container">
                                        <i class="fas fa-virus"></i>
                                        <p><strong>Nombre de la Enfermedad:</strong> {{ $plant->disease_name }}</p>
                                    </div>
                                    <!-- <div class="icon-container">
                                        <i class="fas fa-bug"></i>
                                        <p>{{ $plant->disease_type }}</p>
                                    </div> -->
                                    <!-- <div class="icon-container">
                                        <i class="fas fa-leaf"></i>
                                        <p>{{ $plant->type }}</p>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endif
</div>
@endsection
