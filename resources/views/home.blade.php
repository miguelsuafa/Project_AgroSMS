@extends('layouts.app')

<style>
/* Tipografía */
body {
    font-family: 'Roboto', sans-serif;
}

.bg-color {
/* background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3)), url('images/fondo.jpg');     */
    background: #28a745;
    background-size: cover;
    background-attachment: fixed;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
}

.bg-color h3 {
    font-weight: bold;
    color: white;
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
}

.bg-color h4 {
    font-weight: bold;
    color: white;
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
}

/* Contenedor principal */
.card {
    border-radius: 10px;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.8);
}

.card-header {
    border-radius: 10px 10px 0 0;
}

.card-body {
    padding: 20px;
}

/* Mensaje de Conexión */
.custom-alert {
    border-radius: 5px;
    font-size: 1.2em;
}

/* Botones de Acción */
.btn-outline-primary, .btn-outline-success, .btn-outline-info {
    border-width: 2px;
    border-radius: 5px;
    padding: 15px;
    font-size: 1em;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover, .btn-outline-success:hover, .btn-outline-info:hover {
    background-color: #f1f1f1;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    transform: translateY(-2px);
}

/* Alinear contenido central */
.text-center {
    text-align: center;
}
</style>

@section('content')
<div class="container-fluid">
    <!-- Contenido Principal -->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg bg-success bg-color text-white text-center">
                    <h3 class="mb-0 shadow-md ">{{ __('Panel de Control') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success custom-alert" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-info custom-alert text-center" role="alert">
                        {{ __('¡Estás conectado!') }}
                    </div>
                </div>
            </div>

            <!-- Acciones Rápidas -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg bg-success bg-color text-white text-center">
                    <h4 class="mb-0">{{ __('Acciones Rápidas') }}</h4>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-4 mb-3">
                            <a href="{{ route('plants.index') }}" class="btn btn-outline-primary btn-lg w-100">
                                <i class="fas fa-seedling fa-2x mb-2"></i>
                                <br>
                                {{ __('Gestionar Plantas') }}
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="{{ route('plants.create') }}" class="btn btn-outline-success btn-lg w-100">
                                <i class="fas fa-plus fa-2x mb-2"></i>
                                <br>
                                {{ __('Añadir Nueva Planta') }}
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="{{ route('config.index') }}" class="btn btn-outline-info btn-lg w-100">
                                <i class="fas fa-cogs fa-2x mb-2"></i>
                                <br>
                                {{ __('Configuración') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
