<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

/*
Route::view('/', 'inicio')->name('rutainicio');
Route::view('/form', 'formulario')->name('rutacacas');
Route::view('/consulta', 'clientes')->name('rutaconsulta');
*/
/* Rutas para trbajar con el controlador vistas*/
Route::resource('cliente', clienteController::class);
Route::get('/',[clienteController::class, 'home'])->name('rutainicio');



require __DIR__.'/auth.php';
