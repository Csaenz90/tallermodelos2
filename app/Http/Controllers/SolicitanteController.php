<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Solicitante;

class SolicitanteController extends Controller
{
    public function index()
    {
        $solicitante = Solicitante::with('perfil')->get();
        //return $solicitante;
        return csrf_token();
    }

    public function store()
    {
        $solicitante = new Solicitante;

        $solicitante->nombre = 'Camilo';
        $solicitante->apellido = 'Saenz';
        $solicitante->email = 'camilosaenz@gmail.com';

        $solicitante->save();

        $perfil = new Perfil;

        $perfil->direccion = 'calle 47 # 12-32';
        $perfil->ciudad = 'sincelejo';
        $perfil->profesion = 'ingeniero';
        $perfil->web = 'sucre.com';

        $solicitante->perfil()->save($perfil);

    }

    public function guardarPredios()
    {
        $solicitante = Solicitante::find(1);

        $solicitante->predios()->attach([1, 2, 3]);

    }

    public function guardarSync()
    {
        $solicitante = Solicitante::find(1);

        $solicitante->predios()->sync([1, 2]);
    }
}
