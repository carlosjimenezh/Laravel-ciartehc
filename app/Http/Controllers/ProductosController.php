<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    function index () {
        $productos = Producto::with(['imagenes', 'seccion_investigacion'])->get();
        // return $productos;
        // return $productos[0]->imagenes[0];
        //if id =1 $encontrar productos por id 
        return view('productos', [
            'productos' => $productos
        ]);
    }

    function show (string $id) {
        return view('producto');
    }
}
