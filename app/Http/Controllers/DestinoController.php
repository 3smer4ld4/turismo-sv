<?php

namespace App\Http\Controllers;

use App\Models\Destino;

class DestinoController extends Controller
{
    public function index()
    {
        $destinos = Destino::todos();

        return view('destinos.index', compact('destinos'));
    }

    public function show(int $id)
    {
        $destino = Destino::buscarPorId($id);

        if ($destino === null) {
            abort(404);
        }

        return view('destinos.show', compact('destino'));
    }
}