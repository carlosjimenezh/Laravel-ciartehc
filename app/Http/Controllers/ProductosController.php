<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    function index () {
        $productos = Producto::with(['imagenes', 'seccion_investigacion'])->get();
        return view('productos', [
            'productos' => $productos
        ]);
    }

    function show (string $id) {
        $producto = Producto::where('id', $id)->with(['imagenes', 'seccion_investigacion'])->first();
        // return !empty($producto->imagenes);
        return view('producto', [
            'producto' => $producto
        ]);
    }
}
