<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LineasInvestigacionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductosAdminController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SeccionesInvestigacionController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/difusion', function() {return view('difusion');});
Route::get('/equipo', [EquipoController::class, 'index']);
Route::get('/equipo/{id}', [EquipoController::class, 'show']);
Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/productos/{id}', [ProductosController::class, 'show']);
Route::get('/productos/linea-investigacion/{idlineainvestigacion}', [ProductosController::class, 'buscarPorCategoria']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('eventos', EventosController::class);
    Route::resource('team', TeamController::class);
    Route::resource('lineas-investigacion', LineasInvestigacionController::class)->only([
        'index', 'update', 'edit'
    ]);
    Route::resource('productos-admin', ProductosAdminController::class);
    Route::get('productos-admin/imagenes/{id}', [ProductosAdminController::class, 'index_imagenes']);
    Route::get('productos-admin/imagenes/{id}/create', [ProductosAdminController::class, 'create_imagenes']);
    Route::post('productos-admin/imagenes/{id}', [ProductosAdminController::class, 'store_imagenes']);
    Route::put('productos-admin/imagenes/{id}/{idimagen}', [ProductosAdminController::class, 'update_imagenes']);
    Route::delete('productos-admin/imagenes/{id}/{idimagen}', [ProductosAdminController::class, 'destroy_imagenes']);
    Route::get('productos-admin/imagenes/{id}/{idimagen}/edit', [ProductosAdminController::class, 'edit_imagenes']);
    Route::resource('secciones-investigacion', SeccionesInvestigacionController::class);
    Route::post('/logout', [LogoutController::class, 'logout']);
    Route::get('/admin', [EventosController::class, 'index'])->name('dashboard');
});
// Route::get('/eventos', [EventosController::class, 'index']);
// Route::get('/eventos/create', [EventosController::class, 'create']);
// Route::post('/eventos', [EventosController::class, 'store']);
// Route::get('/eventos/{id}', [EventosController::class, 'show']);
// Route::get('/eventos/{id}/edit', [EventosController::class, 'edit']);
// Route::put('/eventos/{id}', [EventosController::class, 'update']);
// Route::delete('/eventos/{id}', [EventosController::class, 'destroy']);

