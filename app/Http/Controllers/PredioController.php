<?php

namespace App\Http\Controllers;

use App\Models\Municipio;

class PredioController extends Controller
{
    public function index()
    {
        $municipio = Municipio::with('predios')->get();
        return $municipio;
        //return csrf_token();
    }

    public function store()
    {
        $municipio = Municipio::find(1);

        $municipio->predios()->createMany([
            [
                'nombre_predio' => 'La maria',
                'direccion' => 'carrera 45 B',
                'cedula_cadastral' => '56789'
            ],
            [
                'nombre_predio' => '20 de Julio',
                'direccion' => 'calle 78 H 14 - 56',
                'cedula_cadastral' => '23457'
            ],
            [
                'nombre_predio' => 'Santa Maria',
                'direccion' => 'calle 24 I 34 - 31',
                'cedula_cadastral' => '94703'
            ],
        ]);

    }
}
