<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nombre',
    //     'cargo',
    //     'prefijo',
    //     'ubicacion',
    //     'telefono',
    //     'extension',
    //     'email',
    //     'imagen',
    //     'semblanza',
    //     'cv',
    //     'activo'
    // ];

    protected function casts () :array {
        return [
            'activo' => 'boolean'
        ];
    }
}
