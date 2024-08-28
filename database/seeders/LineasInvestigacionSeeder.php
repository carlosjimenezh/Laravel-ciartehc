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
        $lineas->descripcion = 'Explora cómo las artes y la cultura enriquecen la sociedad';
        $lineas->save();


        $lineas = new LineasInvestigacion();
        $lineas->nombre = 'Identidad Cultura y Comunicación';
        $lineas->descripcion = 'Analiza la interacción entre identidad cultural y procesos comunicativos';
        $lineas->save();


        $lineas = new LineasInvestigacion();
        $lineas->nombre = 'Procesos Socioculturales y Desarrollo Comunitario';
        $lineas->decripcion = 'Examina cómo los procesos socioculturales impulsan el desarrollo de comunidades';
        $lineas->save();
    }
}
