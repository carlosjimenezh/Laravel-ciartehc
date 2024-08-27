<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team = new Team();
        $team->nombre = 'Jorge Arturo Martínez Ibarra';
        $team->cargo = 'Director CIARTEHC';
        $team->prefijo = 'Dr.';
        $team->ubicacion = 'Edificio P-planta baja';
        $team->telefono = '01 (341) 575 2222';
        $team->extension = '46073';
        $team->email = 'Jorge.martinez@cusur.udg.mx';
        $team->imagen = '/images/equipo/jorge.png';
        $team->semblanza = 'Licenciado en Biología, Maestro en Ciencias en Recursos Naturales y Desarrollo Rural y Doctor en Recursos Bióticos. Director del Centro de Artes, Humanidades y Comunicación (CIARTEHC) del Centro Universitario del Sur (CUSUR) de la Universidad de Guadalajara. Profesor de la Licenciatura en Desarrollo Turístico Sustentable, la Maestría en Estudios Rurales y la Maestría y el Doctorado en Desarrollo Humano, Educación e Interculturalidad de la Universidad de Guadalajara. Coordinador de diversos proyectos de investigación sobre conservación de recursos naturales, educación ambiental, turismo rural, desarrollo comunitario y medios audiovisuales. Coordinador de dos libros y coautor de seis capítulos de libros. Autor de diversos artículos científicos publicados en revistas especializadas. Director de los documentales Tierra de Colores (2012); En el camino andamos (2017) y; Expresiones del Sur (2022). Productor radiofónico del Programa Policromía (Radio Universidad de Guadalajara-Ciudad Guzmán, 2023 a la fecha); Fundador de la Asociación Mexicana de Turismo Rural, A.C. (2019). Finalista del Premio Estatal de Innovación, Ciencia y Tecnología 2018 en la Categoría de Divulgación Científica otorgado por la Secretaría de Innovación, Ciencia y Tecnología del Gobierno del Estado de Jalisco (2018). Obtención de la Mención Honorífica otorgada por la Asociación Mexicana de Estudios Rurales (AMESTUR, A.C.) por el Desarrollo de Experiencias Consolidadas de Desarrollo Rural Sustentable (2021). Columnista del Periódico Letra Fría (2021 a la fecha). Miembro del Sistema Nacional de Investigadores (SNI) del Consejo Nacional de Humanidades, Ciencias y Tecnologías (CONAHCYT).';
        $team->cv = '';
        $team->activo = true;
        $team->save();


        $team = new Team();
        $team->nombre = 'Rosa Elena Arellano Montoya';
        $team->cargo = 'Profesora Titular del CIARTEHC';
        $team->prefijo = 'Dra.';
        $team->ubicacion = 'Edificio P-planta baja';
        $team->telefono = '01 (341) 575 2222';
        $team->extension = '46073';
        $team->email = 'rosa.arellano@cusur.udg.mx';
        $team->imagen = '/images/equipo/rosa.png';
        $team->semblanza = 'Rosa Elena Arellano Montoya, es profesora e investigadora de tiempo completo en la Universidad de Guadalajara, a partir del 16 de septiembre de 2000. Ha sido responsable de 25 proyectos de investigación y ha publicado 30 productos generados de los proyectos desarrollados, entre ellos, capítulos de libros, artículos en revistas internacionales y nacionales, ponencias e informes técnicos. Ha dirigido 3 tesis de doctorado, 12 tesis de maestría y 15 de licenciatura. Ha sido asesora y/o sinodal de 30 tesis de maestría y 30 proyectos de titulación a nivel de licenciatura con diversas modalidades. Impartió clases durante 12 años en la Maestría de Educación Ambiental, modalidad a distancia en el CUCBA. Ha fundado y gestionado una diversidad de programas y proyectos, como la ‘Compañía de Teatro del CUSur’ de junio de 2011 a la fecha; la creación del Cuerpo Académico UDG-1084 En Consolidación, ‘Desarrollo Humano e Interculturalidad’ del 2019 a la fecha; y del ‘Centro de Investigaciones en Artes, Humanidades y Comunicación (CIARTEHC)’, del 2018 a la fecha; adscrito al Departamento de Artes y Humanidades del Centro Universitario del Sur de la Universidad de Guadalajara. Ha recibido 4 Reconocimientos, entre ellos, a nivel nacional, la ‘Presea al Servicio Social Irene Robledo García’ en 2017; y en marzo de 2018, el ‘Galardón al Mérito Teatral’ por la Secretaría de Cultura del estado de Jalisco y por el Consejo Estatal para la Cultura y las Artes, Jalisco. Es Candidata en el Sistema Nacional de Investigadores (SIN) del Consejo Nacional, Humanidades, Ciencias y Tecnología (CONAHCYT), 2022-2025.';
        $team->cv = '';
        $team->activo = true;
        $team->save();



        $team = new Team();
        $team->nombre = 'Edith Rosario Covarrubias Rodríguez';
        $team->cargo = 'Técnica Académica CIARTEHC';
        $team->prefijo = 'Lic.';
        $team->ubicacion = 'Edificio P-planta baja';
        $team->telefono = '01 (341) 575 2222';
        $team->extension = '46073';
        $team->email = '';
        $team->imagen = '/images/equipo/edith.png';
        $team->semblanza = '';
        $team->cv = '';
        $team->activo = true;
        $team->save();



        $team = new Team();
        $team->nombre = 'Alonso Sánchez Fabián';
        $team->cargo = 'Técnica Académica CIARTEHC';
        $team->prefijo = 'Lic.';
        $team->ubicacion = 'Edificio P-planta baja';
        $team->telefono = '01 (341) 575 2222';
        $team->extension = '46073';
        $team->email = 'alonso.sanchez@cusur.udg.mx';
        $team->imagen = '/images/equipo/alonso.png';
        $team->semblanza = '';
        $team->cv = '';
        $team->activo = true;
        $team->save();
    }
}
