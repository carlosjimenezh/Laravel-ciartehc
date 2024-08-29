<?php

namespace App\Http\Controllers;

use App\Models\LineasInvestigacion;
use App\Models\SeccionesInvestigacion;
use Illuminate\Http\Request;

class SeccionesInvestigacionController extends Controller
{
    //
    function index () {
        //show, create, store, edit, update, destroy
        $secciones_investigacion = SeccionesInvestigacion::with('linea_investigacion')->get();
        return view('secciones_investigacion.index', [
            'secciones_investigacion' => $secciones_investigacion,
        ]);
    }
    function show () {
        return 'show';
    }
    function create () {
        $lineas_investigacion = LineasInvestigacion::all();
        return view('secciones_investigacion.create', [
            'lineas_investigacion' => $lineas_investigacion
        ]);
    }
    function store (Request $request) {
        $request->validate([
            'nombre' => 'required|max:255',
            'lineas_investigacion' => 'required|numeric|gt:0'
        ]);
        $secciones_investigacion = new SeccionesInvestigacion();
        $secciones_investigacion->nombre = $request->nombre;
        $secciones_investigacion->lineas_investigacion_id = $request->lineas_investigacion;
        $secciones_investigacion->save();
        return redirect('/secciones-investigacion');
    }
    function edit (string $id) {
        $secciones_investigacion = SeccionesInvestigacion::find($id);
        $lineas_investigacion = LineasInvestigacion::all();
        return view('secciones_investigacion.edit', [
            'secciones_investigacion' => $secciones_investigacion,
            'lineas_investigacion' => $lineas_investigacion,
        ]);
    }
    function update (Request $request, string $id) {
        $request->validate([
            'nombre' => 'required|max:255',
            'lineas_investigacion' => 'required|numeric|gt:0'
        ]);
        $secciones_investigacion = SeccionesInvestigacion::find($id);
        $secciones_investigacion->nombre = $request->nombre;
        $secciones_investigacion->lineas_investigacion_id = $request->lineas_investigacion;
        $secciones_investigacion->save();
        return redirect('/secciones-investigacion');
    }
    function destroy (string $id) {
        $secciones_investigacion = SeccionesInvestigacion::find($id);
        $secciones_investigacion->delete();
        return redirect('/secciones-investigacion');
    }
}
