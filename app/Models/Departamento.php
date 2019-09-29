<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';

    protected $fillable = [
        'nombre_departamento'
    ];

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

    public function predios()
    {
        return $this->hasManyThrough(Predio::class, Municipio::class);
    }

}
