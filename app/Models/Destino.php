<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class Destino
{
    public static function todos(): array
    {
        $ruta = storage_path('app/data/destinos.json');

        if (!file_exists($ruta)) {
            return [];
        }

        $contenido = file_get_contents($ruta);

        $destinos = json_decode($contenido, true);

        return is_array($destinos) ? $destinos : [];
    }

    public static function buscarPorId(int $id): ?array
    {
        foreach (self::todos() as $destino) {
            if ((int) $destino['id'] === $id) {
                return $destino;
            }
        }

        return null;
    }
}
