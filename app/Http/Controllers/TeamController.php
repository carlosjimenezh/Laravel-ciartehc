<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cv' => 'nullable|mimes:pdf'
        ]);
        $url_imagen = '';
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen')->store('public/team');
            $url_imagen = Storage::url($imagen);
        }
        $cv = '';
        if ($request->hasFile('cv')) {
            $file = $request->file('cv')->store('public/cv');
            $cv = Storage::url($file);
        }
        // Team::create($request->all());
        $team = new Team();
        $team->nombre = $request->nombre;
        $team->cargo = $request->cargo;
        $team->prefijo = $request->prefijo;
        $team->ubicacion = $request->ubicacion;
        $team->telefono = $request->telefono;
        $team->extension = $request->extension;
        $team->email = $request->email;
        $team->imagen = $url_imagen;
        $team->semblanza = $request->semblanza;
        $team->frase = $request->frase;
        $team->cv = $cv;
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
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cv' => 'nullable|mimes:pdf'
        ]);
        $team = Team::find($id);
        $url_imagen = $team->imagen;
        if ($request->hasFile('imagen')) {
            $imagen_url = str_replace('storage', 'public', $team->imagen);
            Storage::delete($imagen_url);
            $imagen = $request->file('imagen')->store('public/team');
            $url_imagen = Storage::url($imagen);
        }
        $cv = '';
        if ($request->hasFile('cv')) {
            $file_url = str_replace('storage','public',$team->cv);
            Storage::delete($file_url);
            $file = $request->file('cv')->store('public/cv');
            $cv = Storage::url($file);
        }
        $team->nombre = $request->nombre;
        $team->cargo = $request->cargo;
        $team->prefijo = $request->prefijo;
        $team->ubicacion = $request->ubicacion;
        $team->telefono = $request->telefono;
        $team->extension = $request->extension;
        $team->email = $request->email;
        $team->imagen = $url_imagen;
        $team->semblanza = $request->semblanza;
        $team->frase = $request->frase;
        $team->cv = $cv;
        $team->activo = $request->filled('activo');
        $team->save();
        return redirect('/team');
    }

    function destroy (string $id) {
        $team = Team::find($id);
        $imagen_url = str_replace('storage', 'public', $team->imagen);
        Storage::delete($imagen_url);
        $file_url = str_replace('storage', 'public', $team->cv);
        Storage::delete($file_url);
        $team->delete();
        return redirect('/team');
    }
}
