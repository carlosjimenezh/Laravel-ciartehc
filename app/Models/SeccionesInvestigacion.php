<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SeccionesInvestigacion extends Model
{
    use HasFactory;

    protected $table = 'seccion_lineas_investigacion';


    function linea_investigacion () : BelongsTo {
        return $this->belongsTo(LineasInvestigacion::class, 'lineas_investigacion_id');
    }

    function productos () : HasMany {
        return $this->hasMany(Producto::class, 'seccion_lineas_investigacion_id');
    }

}
