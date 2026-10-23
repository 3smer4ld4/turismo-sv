<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function create()
    {
        return view('contacto.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'min:2', 'max:100'],
            'correo' => ['required', 'email', 'max:150'],
            'mensaje' => ['required', 'string', 'min:10', 'max:2000'],
        ], [
            'nombre.required' => 'Escribe tu nombre.',
            'nombre.min' => 'El nombre debe tener al menos 2 caracteres.',
            'correo.required' => 'Escribe tu correo electrónico.',
            'correo.email' => 'Introduce un correo electrónico válido.',
            'mensaje.required' => 'Escribe tu mensaje.',
            'mensaje.min' => 'El mensaje debe tener al menos 10 caracteres.',
        ]);

        if (!Contacto::guardar($datos)) {
            return back()
                ->withInput()
                ->with('error', 'No se pudo guardar tu solicitud. Inténtalo de nuevo.');
        }

        return redirect()
            ->route('contacto.create')
            ->with('success', '¡Tu mensaje se guardó correctamente!');
    }
}
