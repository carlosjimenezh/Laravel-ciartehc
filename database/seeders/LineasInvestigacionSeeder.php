<?php

namespace Database\Seeders;

use App\Models\LineasInvestigacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineasInvestigacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $lineas = new LineasInvestigacion();
        $lineas->nombre = 'Artes, Humanidades y Desarrollo Cultural';
        $lineas->save();


        $lineas = new LineasInvestigacion();
        $lineas->nombre = 'Identidad Cultura y Comunicación';
        $lineas->save();


        $lineas = new LineasInvestigacion();
        $lineas->nombre = 'Procesos Socioculturales y Desarrollo Comunitario';
        $lineas->save();
    }
}
