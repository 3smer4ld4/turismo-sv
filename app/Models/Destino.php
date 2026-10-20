<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class Destino
{
    public static function todos(): array
    {
        $ruta = 'data/destinos.json';

        if (!Storage::disk('local')->exists($ruta)) {
            return [];
        }

        $contenido = Storage::disk('local')->get($ruta);

        return json_decode($contenido, true) ?? [];
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
