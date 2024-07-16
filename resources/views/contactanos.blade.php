@extends('layouts.welcome_layout')

@section('content')
<div class="contenedor-principal">
    <div class="contacto-contenedor">
        <div class="contacto-texto">
            <h2>Contáctanos</h2>
            <p>¿Necesitas ponerte en contacto con nosotros?</p>
        </div>

        <div class="contacto-formulario">
            <form action="/enviar-contacto" method="POST" id="formularioContacto">
                @csrf
                <div class="grupo-formulario">
                    <input type="text" class="control-formulario" id="nombre" name="nombre" required>
                    <label for="nombre" class="etiqueta-formulario">Nombre*</label>
                </div>
                <div class="grupo-formulario">
                    <input type="text" class="control-formulario" id="apellido" name="apellido">
                    <label for="apellido" class="etiqueta-formulario">Apellido</label>
                </div>
                <div class="grupo-formulario">
                    <input type="email" class="control-formulario" id="correo" name="correo" required>
                    <label for="correo" class="etiqueta-formulario">Correo Electrónico*</label>
                </div>
                <div class="grupo-formulario">
                    <textarea class="control-formulario" id="mensaje" name="mensaje" rows="4"></textarea>
                    <label for="mensaje" class="etiqueta-formulario">¿En qué podemos ayudarte?</label>
                </div>
                <button type="submit" class="btn-enviar">Enviar</button>
            </form>
        </div>
    </div>

    <div class="informacion-seccion">
        <h3>Nuestra Ubicacion</h3>
        <p>Cra. 10 #10-45 a 10-3, Garzón, Huila</p>
        <p>Email: Agrosms2617502@gmail.com. | Teléfono: +52 3229117686</p>
    </div>

    <div class="mapa-contenedor">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345092437!2d144.95373531569273!3d-37.81627974202198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d8c3d5d71b0!2sGoogle!5e0!3m2!1ses!2sco!4v1633123851950!5m2!1ses!2sco" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- <div class="faq-seccion">
        <h3>Preguntas Frecuentes</h3>
        <div class="faq-item">
            <p><strong>Q: ¿Cómo puedo contactar al soporte al cliente?</strong></p>
            <p>A: Puedes contactarnos por correo electrónico a soporte@tuempresa.com o llamarnos al (123) 456-7890.</p>
        </div>
        <div class="faq-item">
            <p><strong>Q: ¿Cuáles son sus horarios de oficina?</strong></p>
            <p>A: Nuestros horarios de oficina son de lunes a viernes, de 9 AM a 5 PM.</p>
        </div>
    </div> -->

    <!-- <div class="testimonio-seccion">
        <h3>Lo que Dicen Nuestros Clientes</h3>
        <div class="testimonio-item">
            <p>"¡Excelente servicio al cliente y tiempos de respuesta rápidos!"</p>
            <p class="autor">- John Doe</p>
        </div>
        <div class="testimonio-item">
            <p>"Recomiendo esta empresa por su dedicación y profesionalismo."</p>
            <p class="autor">- Jane Smith</p>
        </div>
    </div> -->
</div>

<style>
    body {
        background: #f9f9f9;
        font-family: 'Arial', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        flex-direction: column;
        overflow-x: hidden;
    }

    .contenedor-principal {
        width: 100%;
        max-width: 1200px;
        padding: 8rem;
        box-sizing: border-box;
    }

    .contacto-contenedor, .informacion-seccion, .mapa-contenedor, .faq-seccion, .testimonio-seccion {
        background: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        width: 100%;
    }

    .contacto-texto {
        text-align: center;
        margin-bottom: 2rem;
    }

    .contacto-texto h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: #34520d;
    }

    .contacto-texto p {
        font-size: 1rem;
        color: #666;
    }

    .contacto-formulario .grupo-formulario {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .contacto-formulario input,
    .contacto-formulario textarea {
        width: 100%;
        padding: 0.5rem 0.5rem 0.5rem 1rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
        background: #f7f7f7;
        outline: none;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .contacto-formulario input:focus,
    .contacto-formulario textarea:focus {
        border-color: #34520d;
        box-shadow: 0 0 5px rgb(52, 82, 13, 0.3);
    }

    .contacto-formulario .etiqueta-formulario {
        position: absolute;
        top: 0;
        left: 1rem;
        font-size: 1rem;
        color: #999;
        pointer-events: none;
        transition: all 0.2s;
    }

    .contacto-formulario input:focus + .etiqueta-formulario,
    .contacto-formulario input:not(:placeholder-shown) + .etiqueta-formulario,
    .contacto-formulario textarea:focus + .etiqueta-formulario,
    .contacto-formulario textarea:not(:placeholder-shown) + .etiqueta-formulario {
        top: -1rem;
        left: 0.75rem;
        font-size: 0.75rem;
        color: rgb(52, 82, 13);
        background: #fff;
        padding: 0 0.25rem;
    }

    .btn-enviar {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background-color: rgb(52, 82, 13);
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s, box-shadow 0.3s;
        width: 100%;
    }

    .btn-enviar:hover {
        background-color: rgb(52, 82, 13);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .informacion-seccion, .faq-seccion, .testimonio-seccion {
        text-align: center;
    }

    .informacion-seccion h3,
    .faq-seccion h3,
    .testimonio-seccion h3 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    .faq-item,
    .testimonio-item {
        text-align: left;
        margin-bottom: 1rem;
    }

    .faq-item p,
    .testimonio-item p {
        margin: 0.5rem 0;
        color: #555;
    }

    .testimonio-item {
        padding: 1rem;
        background: #f9f9f9;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .testimonio-item .autor {
        font-weight: bold;
        margin-top: 0.5rem;
        color: #333;
    }
</style>

<script>
    document.getElementById('formularioContacto').addEventListener('submit', function(event) {
        event.preventDefault();

        const nombre = document.getElementById('nombre').value;
        const correo = document.getElementById('correo').value;
        const mensaje = document.getElementById('mensaje').value;

        if(nombre === '' || correo === '' || mensaje === '') {
            alert('Todos los campos marcados con * son obligatorios.');
            return;
        }

        this.submit();
    });
</script>
@endsection
