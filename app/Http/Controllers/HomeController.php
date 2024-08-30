<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $eventos = Evento::all();
        $team = Team::all();
        return view('home', [
            'eventos' => $eventos,
            'equipo' => $team
        ]);
    }
}
