<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function enviarContacto(Request $request)
    {
        // Valida y procesa los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Aquí puedes agregar la lógica para enviar un correo, guardar en la base de datos, etc.

        return back()->with('success', '¡Tu mensaje ha sido enviado con éxito!');
    }
}
