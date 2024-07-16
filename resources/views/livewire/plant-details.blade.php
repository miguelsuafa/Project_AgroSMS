<div class="modal fade" id="plantDetailsModal" tabindex="-1" role="dialog" aria-labelledby="plantDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="plantDetailsModalLabel">{{ $plant->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

