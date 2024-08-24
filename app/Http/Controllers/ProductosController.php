<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    function index () {
        return view('productos');
    }

    function show (string $id) {
        return view('producto');
    }
}
