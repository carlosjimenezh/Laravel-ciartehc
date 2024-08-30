<?php

namespace Database\Seeders;

use App\Models\SeccionesInvestigacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeccionInvestigacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $seccion = new SeccionesInvestigacion();
        $seccion->nombre = 'Habilidades para la vida (HpV)';
        $seccion->lineas_investigacion_id = 1;
        $seccion->save();

        $seccion = new SeccionesInvestigacion();
        $seccion->nombre = 'Compañía de Teatro del CUSur';
        $seccion->lineas_investigacion_id = 1;
        $seccion->save();
    }
}
