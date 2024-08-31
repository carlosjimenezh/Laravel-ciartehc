<?php

namespace App\Http\Controllers;

use App\Models\ImagenProducto;
use App\Models\Producto;
use App\Models\SeccionesInvestigacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosAdminController extends Controller
{
    //
    function index () {
        //show, create, store, edit, update, destroy
        $productos = Producto::with('seccion_investigacion')->get();
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

    function index_imagenes (string $id) {
        $producto = Producto::where('id', $id)->with('imagenes')->first();
        return view('productos.index_imagenes', [
            'producto' => $producto
        ]);
    }

    function create_imagenes (string $id) {
        $producto = Producto::find($id);
        return view('productos.create_imagenes', [
            'producto' => $producto
        ]);
    }

    function store_imagenes (Request $request) {
        $request->validate([
            'producto_id' => 'required|numeric|gt:0',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $imagen = $request->file('imagen')->store('public/productos');
        $url_imagen = Storage::url($imagen);
        $imagenProducto = new ImagenProducto();
        $imagenProducto->producto_id = $request->producto_id;
        $imagenProducto->imagen = $url_imagen;
        $imagenProducto->save();
        return redirect('/productos-admin/imagenes/'.$request->producto_id);   
    }

    function edit_imagenes (string $id, string $idimagen) {
        $imagen = ImagenProducto::where('id', $idimagen)->with('producto')->first();
        return view('productos.edit_imagenes', [
            'imagen' => $imagen,
            'id' => $id
        ]);
    }

    function update_imagenes (Request $request, string $id, string $idimagen) {
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $imagen = ImagenProducto::find($idimagen);
        $imagen_url = str_replace('storage', 'public', $imagen->imagen);
        Storage::delete($imagen_url);
        $imagen_url = $request->file('imagen')->store('public/productos');
        $url_imagen = Storage::url($imagen_url);
        $imagen->imagen = $url_imagen;
        $imagen->save();
        return redirect('/productos-admin/imagenes/'.$id);
    }

    function destroy_imagenes (string $id, string $idimagen) {
        $imagen = ImagenProducto::find($idimagen);
        $imagen_url = str_replace('storage', 'public', $imagen->imagen);
        Storage::delete($imagen_url);
        $imagen->delete();
        return redirect('/productos-admin/imagenes/'.$id);
    }
}
