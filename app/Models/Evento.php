<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    //la tabla a la que hace referencia un modelo es en plural pero en lenguaje inglés


    //mutaciones y accesores, para el formato de la insercion y la seleccion de elementos get set

    //casting, para cambiar el tipo de datos que llegan de la bd
    protected function casts () : array {
        return [
            'fecha_evento' => 'datetime',
            'activo' => 'boolean'
        ];
    }

}
