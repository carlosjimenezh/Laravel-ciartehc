<?php

use App\Http\Controllers\EventosController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
});

Route::get('/eventos', [EventosController::class, 'index']);
Route::get('/eventos/create', [EventosController::class, 'create']);
Route::post('/eventos', [EventosController::class, 'store']);
Route::get('/eventos/{id}', [EventosController::class, 'show']);
Route::get('/eventos/{id}/edit', [EventosController::class, 'edit']);
Route::put('/eventos/{id}', [EventosController::class, 'update']);
Route::delete('/eventos/{id}', [EventosController::class, 'destroy']);


Route::controller(TeamController::class)->group(function () {
    Route::get('/team', 'index');
    Route::get('/team/create', 'create');
    Route::post('/team', 'store');
    Route::get('/team/{id}', 'show');
    Route::get('/team/{id}/edit', 'edit');
    Route::put('/team/{id}', 'update');
    Route::delete('/team/{id}', 'destroy');
});
