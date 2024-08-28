<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

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
        ]);
        $evento = new Evento();
        $evento->titulo = $request->titulo;
        $evento->fecha_evento = $request->fecha;
        $evento->imagen = $request->imagen;
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
            'activo' => 'required'
        ]);
        $evento = Evento::find($id);
        $evento->titulo = $request->titulo;
        $evento->fecha_evento = $request->fecha;
        $evento->imagen = $request->imagen;
        $evento->url = $request->link;
        $evento->activo = $request->filled('activo');
        $evento->save();
        return redirect("/eventos");
    }

    function destroy (string $id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect('/eventos');
    }

}
