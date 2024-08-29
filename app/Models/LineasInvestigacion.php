<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LineasInvestigacion extends Model
{
    use HasFactory;

    protected $table = 'lineas_investigacion';

    public function secciones_lineas_investigacion () : HasMany {
        return $this->hasMany(SeccionesInvestigacion::class, 'lineas_investigacion_id');
    }
}
