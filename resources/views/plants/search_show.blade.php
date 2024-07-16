<!-- resources/views/plants/search_show.blade.php -->
@extends('layouts.welcome_layout')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header text-center">
                    <h3 class="my-3">{{ $plant->name }}</h3>
                </div>
                <div class="card-body">
                    <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}" class="img-fluid mb-3">
                    <h4>Enfermedad: {{ $plant->disease_name }}</h4>
                    <p>{{ $plant->description }}</p>
                    <h5>Tratamiento Químico:</h5>
                    <p>{{ $plant->chemical_treatment }}</p>
                    <h5>Cantidad de Tratamiento:</h5>
                    <p>{{ $plant->treatment_quantity }}</p>
                    <h5>Medidas Preventivas:</h5>
                    <p>{{ $plant->preventive_measures }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
