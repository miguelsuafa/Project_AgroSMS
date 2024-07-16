@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Detalle de Planta</h2>
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <a href="{{ route('plants.index') }}" class="btn btn-primary btn-sm">Volver</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('images/' .  $plant->image) }}" alt="Imagen planta">
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{ $plant->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <td>{{ $plant->name }}</;td>
                                        </tr>
                                        <tr>
                                            <th>Nombre de la Enfermedad</th>
                                            <td>{{ $plant->disease_name }}</;td>
                                        </tr>
                                        <tr>
                                            <th>Descripción</th>
                                            <td>{{ $plant->description }}</;td>
                                        </tr>
                                        <tr>
                                            <th>Tratamiento Químico</</th>
                                            <td>{{ $plant->chemical_treatment }}</;td>
                                        </tr>
                                        <tr>
                                            <th>Cantidad de Tratamiento</</th>
                                            <td>{{ $plant->treatment_quantity }}</;td>
                                        </tr>
                                        <tr>
                                            <th>Medidas Preventivas</</th>
                                            <td>{{ $plant->preventive_measures }}</;td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-warning" href="{{ route('plants.edit', $plant->id) }}">
                                        Editar
                                    </a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('plants.destroy', $plant->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
