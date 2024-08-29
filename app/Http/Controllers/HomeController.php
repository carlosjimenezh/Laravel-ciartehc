<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $eventos = Evento::all();
        return view('home', [
            'eventos' => $eventos
        ]);
    }
}
