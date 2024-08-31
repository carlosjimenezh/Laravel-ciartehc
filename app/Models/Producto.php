<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    public function seccion_investigacion () : BelongsTo {
        return $this->belongsTo(SeccionesInvestigacion::class, 'seccion_lineas_investigacion_id');
    }

    public function imagenes () : HasMany {
        return $this->hasMany(ImagenProducto::class);
    }
}
