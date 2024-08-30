<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    //
    public function index () {
        $equipo = Team::all();
        return view('/equipo', [
            'equipo' => $equipo
        ]);
    }

    public function show ($id) {
        $equipo = Team::find($id);
        return $equipo;
    }
}
