<?php

namespace App\Models;

class Contacto
{
    public static function guardar(array $datos): bool
    {
        $ruta = storage_path('app/data/contactos.json');

        if (!file_exists($ruta)) {
            return false;
        }

        $contenido = file_get_contents($ruta);

        if ($contenido === false) {
            return false;
        }

        $contactos = json_decode($contenido, true);

        if (!is_array($contactos)) {
            return false;
        }

        $contactos[] = [
            'id' => count($contactos) + 1,
            'nombre' => $datos['nombre'],
            'correo' => $datos['correo'],
            'mensaje' => $datos['mensaje'],
            'fecha' => now()->toDateTimeString(),
        ];

        $json = json_encode(
            $contactos,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );

        if ($json === false) {
            return false;
        }

        return file_put_contents($ruta, $json, LOCK_EX) !== false;
    }
}
