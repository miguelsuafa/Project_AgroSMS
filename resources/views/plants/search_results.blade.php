@extends('layouts.welcome_layout')

@section('content')
<div class="container">
    <h2>Resultados de Búsqueda para: "{{ $query }}"</h2>
    @if($plants->isEmpty())
        <p>No se encontraron plantas.</p>
    @else
        <div class="row">
            @foreach($plants as $plant)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if($plant->image_url)
                            <img src="{{ $plant->image_url }}" class="card-img-top" alt="{{ $plant->name }}">
                        @else
                            <img src="ruta/a/imagen/default.jpg" class="card-img-top" alt="{{ $plant->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $plant->name }}</h5>
                            <p class="card-text"><strong>Nombre de la Enfermedad:</strong> {{ $plant->disease_name }}</p>
                            <p class="card-text">{{ Str::limit($plant->description, 100) }}</p>
                            <a href="{{ route('plants.show', $plant->id) }}" class="btn btn-primary">Ver Detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
