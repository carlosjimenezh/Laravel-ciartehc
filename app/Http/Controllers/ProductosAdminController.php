<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\SeccionesInvestigacion;
use Illuminate\Http\Request;

class ProductosAdminController extends Controller
{
    //
    function index () {
        //show, create, store, edit, update, destroy
        $productos = Producto::all();
        return view('productos.index', [
            'productos' => $productos
        ]);
    }
    function show () {
        return 'show';
    }
    function create () {
        $seccion_investigacion = SeccionesInvestigacion::all();
        return view('productos.create', ['seccion_investigacion' => $seccion_investigacion]);
    }
    function store (Request $request) {
        $request->validate([
            'nombre' => 'required|max:255',
            'activo' => 'required',
            'seccion_investigacion' => 'required|numeric|gt:0'
        ]);
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->activo = $request->filled('activo');
        $producto->seccion_lineas_investigacion_id = $request->seccion_investigacion;
        $producto->save();
        return redirect('/productos-admin');
    }
    function edit (string $id) {
        $seccion_investigacion = SeccionesInvestigacion::all();
        $producto = Producto::find($id);
        return view('productos.edit', [
            'seccion_investigacion' => $seccion_investigacion,
            'producto' => $producto
        ]);
    }
    function update (Request $request, string $id) {
        $request->validate([
            'nombre' => 'required|max:255',
            'activo' => 'required',
            'seccion_investigacion' => 'required|numeric|gt:0'
        ]);
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->activo = $request->filled('activo');
        $producto->seccion_lineas_investigacion_id = $request->seccion_investigacion;
        $producto->save();
        return redirect('/productos-admin');
    }
    function destroy (string $id) {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/productos-admin');
    }
}
