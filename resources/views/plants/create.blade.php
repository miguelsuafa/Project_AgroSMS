@extends('layouts.app')

<style>
/* Tipografía */
body {
    font-family: 'Roboto', sans-serif;
}

/* Contenedor principal */
.card {
    border-radius: 10px;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.8);
    margin-top: 20px;
}

.card-header {
    border-radius: 10px 10px 0 0;
    /* background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3)), url('images/fondo.jpg'); */
    background-size: cover;
    color: white;
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
    padding: 15px;
}

.card-header h3 {
    font-weight: bold;
}

.card-body {
    padding: 30px;
}

/* Formularios */
.form-label {
    font-weight: bold;
    color: #333;
}

.form-control, .custom-file-input {
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}

.form-control:focus, .custom-file-input:focus {
    border-color: #5cb85c;
    box-shadow: 0 0 5px rgba(92, 184, 92, 0.5);
}

.custom-file-label {
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
}

/* Fieldsets */
fieldset {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px 20px;
    margin-bottom: 20px;
}

legend {
    font-size: 1.2em;
    font-weight: bold;
    color: #5cb85c;
}

/* Botones */
.btn-lg {
    padding: 10px 20px;
    font-size: 1.2em;
}

.btn-success, .btn-secondary {
    border-radius: 5px;
    transition: all 0.3s ease;
}

.btn-success {
    background-color: #5cb85c;
    border-color: #5cb85c;
}

.btn-success:hover, .btn-secondary:hover {
    background-color: #4cae4c;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    transform: translateY(-2px);
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
}

/* Errores */
.invalid-feedback {
    font-size: 0.9em;
    color: #d9534f;
}

/* Nombre del archivo seleccionado */
.custom-file-label.selected::after {
    content: "Archivo seleccionado";
}
</style>

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header text-white text-center bg bg-success">
                    <h3 class="my-3">{{ __('Agregar Nueva Planta') }}</h3>
                </div>
                <div class="card-body">
                    <form id="plant-form" action="{{ route('plants.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <fieldset class="border p-3 mb-4">
                            <legend class="w-auto px-2">{{ __('Información de la Planta') }}</legend>
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Nombre:') }}</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la planta" required>
                            </div>
                            <div class="mb-3">
                                <label for="disease_name" class="form-label">{{ __('Nombre de la Enfermedad:') }}</label>
                                <input type="text" name="disease_name" id="disease_name" class="form-control" placeholder="Nombre de la enfermedad" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('Descripción:') }}</label>
                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Descripción de la enfermedad" required></textarea>
                            </div>
                        </fieldset>

                        <fieldset class="border p-3 mb-4">
                            <legend class="w-auto px-2">{{ __('Tratamiento') }}</legend>
                            <div class="mb-3">
                                <label for="chemical_treatment" class="form-label">{{ __('Tratamiento Químico:') }}</label>
                                <input type="text" name="chemical_treatment" id="chemical_treatment" class="form-control" placeholder="Nombre del tratamiento químico">
                            </div>
                            <div class="mb-3">
                                <label for="treatment_quantity" class="form-label">{{ __('Cantidad de Tratamiento:') }}</label>
                                <input type="text" name="treatment_quantity" id="treatment_quantity" class="form-control" placeholder="Cantidad de tratamiento">
                                <small class="form-text text-muted">Ejemplo: 20cm por bombada de 20lt</small>
                            </div>
                            <div class="mb-3">
                                <label for="preventive_measures" class="form-label">{{ __('Medidas Preventivas:') }}</label>
                                <textarea name="preventive_measures" id="preventive_measures" class="form-control" rows="3" placeholder="Medidas preventivas"></textarea>
                            </div>
                        </fieldset>

                        <fieldset class="border p-3 mb-4">
                            <legend class="w-auto px-2">{{ __('Imagen') }}</legend>
                            <div class="mb-3">
                                <label for="image" class="form-label">{{ __('Imagen:') }}</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">{{ __('Seleccionar Archivo') }}</label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-success btn-lg me-2">
                                <i class="fas fa-save"></i> {{ __('Guardar') }}
                            </button>
                            <a href="{{ route('plants.index') }}" class="btn btn-secondary btn-lg">
                                <i class="fas fa-times"></i> {{ __('Cancelar') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('#plant-form').validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            disease_name: {
                required: true,
                minlength: 3
            },
            description: {
                required: true,
                minlength: 10
            },
            chemical_treatment: {
                minlength: 3
            },
            treatment_quantity: {
                number: true
            },
            preventive_measures: {
                minlength: 5
            },
            image: {
                extension: "jpg|jpeg|png|gif"
            }
        },
        messages: {
            name: {
                required: "Por favor, ingrese el nombre de la planta.",
                minlength: "El nombre debe tener al menos 3 caracteres."
            },
            disease_name: {
                required: "Por favor, ingrese el nombre de la enfermedad.",
                minlength: "El nombre de la enfermedad debe tener al menos 3 caracteres."
            },
            description: {
                required: "Por favor, ingrese la descripción de la enfermedad.",
                minlength: "La descripción debe tener al menos 10 caracteres."
            },
            chemical_treatment: {
                minlength: "El nombre del tratamiento químico debe tener al menos 3 caracteres."
            },
            treatment_quantity: {
                number: "Por favor, ingrese un número válido."
            },
            preventive_measures: {
                minlength: "Las medidas preventivas deben tener al menos 5 caracteres."
            },
            image: {
                extension: "Por favor, seleccione un archivo de imagen válido (jpg, jpeg, png, gif)."
            }
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            if (element.prop('type') === 'file') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        }
    });

    // Mostrar el nombre del archivo seleccionado
    $('.custom-file-input').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
});
</script>
@endsection
