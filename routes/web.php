<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ClienteController;

/*
Route::view('/', 'inicio')->name('rutainicio');
Route::view('/form', 'formulario')->name('rutacacas');
Route::view('/consulta', 'clientes')->name('rutaconsulta');
*/
/* Rutas para trbajar con el controlador vistas*/
Route::resource('cliente', ClienteController::class);
Route::get('/',[ClienteController::class, 'home'])->name('rutainicio');



require __DIR__.'/auth.php';
