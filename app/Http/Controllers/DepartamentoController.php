<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Municipio;


class DepartamentoController extends Controller
{
    public function index()
    {
        $departamento = Departamento::with('municipios')->get();
        return $departamento;
        //return csrf_token();
    }

    public function obtenerPredios()
    {
        $departamento = Departamento::with('predios')->get();
        return $departamento;
    }

    public function store()
    {
        $departamento = new Departamento;

        $departamento->nombre_departamento = 'Sucre'; 

        $departamento->save();
        
        $departamento->municipios()->saveMany([
            new Municipio([
                'nombre_municipio' => 'Sincelejo'
            ]),
            new Municipio([
                'nombre_municipio' => 'Corozal'
            ]),
            new Municipio([
                'nombre_municipio' => 'Sampues'
            ]),
        ]); 
        
    }
}
