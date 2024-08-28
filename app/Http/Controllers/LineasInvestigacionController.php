<?php

namespace App\Http\Controllers;

use App\Models\LineasInvestigacion;
use Illuminate\Http\Request;

class LineasInvestigacionController extends Controller
{
    //
    function index () {
        //show, create, store, edit, update, destroy
        $lineas_investigacion = LineasInvestigacion::all();
        return view('lineas_investigacion.index', [
            'lineas_investigacion' => $lineas_investigacion
        ]);
    }
    function edit (string $id) {
        $lineas_investigacion = LineasInvestigacion::find($id);
        return view('lineas_investigacion.edit', [
            'lineas_investigacion' => $lineas_investigacion
        ]);
    }
    function update (Request $request, string $id) {
        $lineas_investigacion = LineasInvestigacion::find($id);
        $lineas_investigacion->nombre = $request->nombre;
        $lineas_investigacion->descripcion = $request->descripcion;
        $lineas_investigacion->save();
        return redirect('/lineas-investigacion');
    }
}
