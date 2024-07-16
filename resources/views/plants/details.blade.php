<!-- resources/views/plants/details.blade.php -->
@extends('layouts.welcome_layout')

@section('content')
<head>
    <!-- Incluir Font Awesome para los iconos de redes sociales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    .plant-detail-container {
        margin-top: 70px;
        display: flex;
        justify-content: center;
    }

    .plant-detail-content {
        display: flex;
        flex-wrap: wrap;
        max-width: 1200px;
        width: 100%;
        background-color: #fff;
        padding: 20px;
    }

    .plant-detail-left, .plant-detail-right {
        flex: 1;
        padding: 20px;
    }

    .plant-detail-left {
        border-right: 1px solid #ddd;
    }

    .plant-detail-left img {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    .plant-name {
        font-size: 2em;
        font-weight: bold;
        color: black;
        margin-bottom: 10px;
    }

    .plant-disease {
        font-size: 1.5em;
        color: black;
        margin-bottom: 20px;
    }

    .btn-back {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
    }

    .btn-back:hover {
        text-decoration: none;
        color: white;
        background-color: #218838;
    }

    .social-share {
        margin-top: 20px;
        text-align: center;
    }

    .social-share p {
        color: black;
    }

    .section-title {
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 1.2em;
        color: black;
    }

    .section-content {
        margin-bottom: 20px;
        color: black;
    }
</style>



<div class="container plant-detail-container">
    <div class="plant-detail-content">
        <div class="plant-detail-left">
            <div class="plant-name">{{ $plant->name }}</div>
            <div class="plant-disease">{{ $plant->disease_name }}</div>
            @if ($plant->image)
                <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}">
            @else
                <img src="{{ asset('images/default-plant.jpg') }}" alt="{{ $plant->name }}">
            @endif

            <!-- <div class="social-share">
                <p>Compartir en redes sociales</p>
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div> -->
        </div>
        <div class="plant-detail-right">
            <div class="section-title">Descripción</div>
            <div class="section-content">{{ $plant->description }}</div>

            <div class="section-title">Tratamiento</div>
            <div class="section-content">{{ $plant->chemical_treatment }}</div>

            <div class="section-title">Cantidad de Tratamiento</div>
            <div class="section-content">{{ $plant->treatment_quantity }}</div>

            <div class="section-title">Medidas Preventivas</div>
            <div class="section-content">{{ $plant->preventive_measures }}</div>

            <a href="{{ url('/biblioteca') }}" class="btn-back">Regresar a biblioteca</a>
        </div>
    </div>
</div>
@endsection
