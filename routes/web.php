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
Route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');
Route::get('/consulta',[controladorVistas::class, 'select'])->name('rutaconsulta');
Route::view('/component', 'componentes')->name('rutacomponent');
/* Rutas para trbajar con el controlador clienteController*/
Route::get('/cliente/create',[clienteController::class, 'create'])->name('rutacacas');

Route::post('/cliente', [clienteController::class, 'store'])->name('rutaenviar');
Route::get('/cliente',[clienteController::class,'index'])->name('consulta');

require __DIR__.'/auth.php';
