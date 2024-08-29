<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventosController extends Controller
{
    function index ()
    {
        $eventos = Evento::all();
        return view('eventos.index', [
            'eventos' => $eventos
        ]);
    }

    function show (string $id) 
    {
        $evento = Evento::find($id);
        return view('eventos.show', [
            'evento' => $evento
        ]);
    }

    function create ()
    {
        return view('eventos.create');
    }

    function store (Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'activo' => 'required',
            'file' => 'image|max:2048'
        ]);
        $url_imagen = '';
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen')->store('public/eventos');
            $url_imagen = Storage::url($imagen);
        }
        $evento = new Evento();
        $evento->titulo = $request->titulo;
        $evento->fecha_evento = $request->fecha;
        $evento->imagen = $url_imagen;
        $evento->url = $request->link;
        $evento->activo = $request->filled('activo');
        $evento->save();
        return redirect('/eventos');
    }

    function edit (string $id)
    {
        $evento = Evento::find($id);
        return view('eventos.edit', ['evento' => $evento]);
    }

    function update (Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'activo' => 'required',
            'file' => 'image|max:2048'
        ]);
        $evento = Evento::find($id);
        $url_imagen = $evento->imagen;
        if ($request->hasFile('imagen')) {
            $imagen_url = str_replace('storage', 'public', $evento->imagen);
            Storage::delete($imagen_url);
            $imagen = $request->file('imagen')->store('public/eventos');
            $url_imagen = Storage::url($imagen);
        }
        $evento->titulo = $request->titulo;
        $evento->fecha_evento = $request->fecha;
        $evento->imagen = $url_imagen;
        $evento->url = $request->link;
        $evento->activo = $request->filled('activo');
        $evento->save();
        return redirect("/eventos");
    }

    function destroy (string $id)
    {
        $evento = Evento::find($id);
        $imagen_url = str_replace('storage', 'public', $evento->imagen);
        Storage::delete($imagen_url);
        $evento->delete();
        return redirect('/eventos');
    }

}
