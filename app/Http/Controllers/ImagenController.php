<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Predio;


class ImagenController extends Controller
{
    public function index()
    {
       $departamento = Departamento::find(1);
       return csrf_field();
       //return $departamento->imagenes;
    }

    public function store()
	{
		$departamento = Departamento::find(1);
        
		$departamento->imagenes()->create(['url' => 'Sucre-departamento.png']);
	}

	public function indexMunicipio()
	{
		$municipio = Municipio::find(1);
        return $municipio->imagenes;
	}

	public function storeMunicipio()
	{
		$municipio = Municipio::find(1);
        
		$municipio->imagenes()->createMany([
			['url' => 'sincelejo-municipio.png'],
			['url' => 'chalan-municipio.png'],
			['url' => 'corozal-municipio.png'],
			['url' => 'palmito-municipio.png']
		]);
	}

	public function indexPredio()
	{
		$predio = Predio::find(1);
        return $predio->imagenes;
	}

	public function storePredio()
	{
		$predio = Predio::find(1);
        
		$predio->imagenes()->createMany([
			['url' => 'predio1.png'],
			['url' => 'predio2.png'],
			['url' => 'predio3.png'],
			['url' => 'predio4.png']
		]);
	}
}
