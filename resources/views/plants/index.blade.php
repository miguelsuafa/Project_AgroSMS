@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center page-title">Listado de Plantas</h1>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('plants.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar Planta</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="plants-table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Enfermedad</th>
                    <!-- <th>Descripción</th> -->
                    <th>Tratamiento Químico</th>
                    <!-- <th>Cantidad de Tratamiento</th>
                    <th>Medidas Preventivas</th> -->
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plants as $plant)
                    <tr>
                        <td>{{ $plant->id }}</td>
                        <td>{{ $plant->name }}</td>
                        <td>{{ $plant->disease_name }}</td>
                        <!-- <td>{{ $plant->description }}</td> -->
                        <td>{{ $plant->chemical_treatment }}</td>
                        <!-- <td>{{ $plant->treatment_quantity }}</td>
                        <td>{{ $plant->preventive_measures }}</td> -->
                        <td>
                            @if ($plant->image)
                                <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}" class="img-thumbnail" style="width: 300px;">
                            @else
                                Sin imagen
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('plants.show', $plant->id) }}" class="btn btn-info btn-sm btn-view" title="Ver"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('plants.edit', $plant->id) }}" class="btn btn-primary btn-sm btn-edit" title="Editar"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('plants.destroy', $plant->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de eliminar esta planta?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm btn-delete" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#plants-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
            },
            "order": [[ 0, "desc" ]],
            "pagingType": "simple_numbers",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
            "responsive": true
        });
    });
</script>
@endsection
