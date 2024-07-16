@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Configuración del Perfil</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('config.update') }}" method="POST" class="profile-form">
        @csrf

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Nueva Contraseña (opcional):</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Introduce tu nueva contraseña">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Nueva Contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirma tu nueva contraseña">
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-4">Guardar Cambios</button>
    </form>
</div>

<style>
    .profile-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .profile-form .form-group label {
        color: #666;
        margin-bottom: 5px;
    }
    .profile-form .form-control {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .profile-form .btn-primary {
        background-color: #007BFF;
        border-color: #007BFF;
    }
    .profile-form .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
@endsection

