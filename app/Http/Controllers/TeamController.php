<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function index () {
        $team = Team::all();
        return view('team.index', [
            'team' => $team
        ]);
    }
    
    function create () {
        return view('team.create');
    }

    function store (Request $request) {
        $request->validate([
            'nombre' => 'required|max:255',
            'cargo' => 'required|max:255',
            'ubicacion' => 'required|max:255',
            'telefono' => 'required|max:255',
            'activo' => 'required',
        ]);

        // Team::create($request->all());
        $team = new Team();
        $team->nombre = $request->nombre;
        $team->cargo = $request->cargo;
        $team->prefijo = $request->prefijo;
        $team->ubicacion = $request->ubicacion;
        $team->telefono = $request->telefono;
        $team->extension = $request->extension;
        $team->email = $request->email;
        $team->imagen = $request->imagen;
        $team->semblanza = $request->semblanza;
        $team->cv = $request->cv;
        $team->activo = $request->filled('activo');
        $team->save();
        return redirect('/team');
    }

    function show (string $id) {
        $team = Team::find($id);
        return view('team.show', [
            'team' => $team
        ]);
    }

    function edit (string $id) {
        $team = Team::find($id);
        return view('team.edit', ['team' => $team]);
    }

    function update (Request $request, string $id) {
        $request->validate([
            'nombre' => 'required|max:255',
            'cargo' => 'required|max:255',
            'ubicacion' => 'required|max:255',
            'telefono' => 'required|max:255',
            'activo' => 'required',
        ]);
        $team = Team::find($id);
        $team->nombre = $request->nombre;
        $team->cargo = $request->cargo;
        $team->prefijo = $request->prefijo;
        $team->ubicacion = $request->ubicacion;
        $team->telefono = $request->telefono;
        $team->extension = $request->extension;
        $team->email = $request->email;
        $team->imagen = $request->imagen;
        $team->semblanza = $request->semblanza;
        $team->cv = $request->cv;
        $team->activo = $request->filled('activo');
        $team->save();
        return redirect('/team');
    }

    function destroy (string $id) {
        $team = Team::find($id);
        $team->delete();
        return redirect('/team');
    }
}
