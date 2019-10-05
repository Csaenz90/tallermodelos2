<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    protected $fillable = [
        'nombre_municipio',
        'departamento_id'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function predios()
    {
        return $this->hasMany(Predio::class);
    }
     public function imagenes()
    {
        return $this->morphMany('App\Models\Imagen', 'imageable');
    }

}
