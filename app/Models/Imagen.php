<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    
    protected $fillable = [
        'url'
    ];

    public function scoreable()
    {
        return $this->morphTo();
    }
}
