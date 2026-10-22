<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');

Route::get('/clientes', [ClienteController::class, 'index'])
    ->name('clientes.index');

 Route::get('/productos', [productosController::class, 'index'])
    ->name('clientes.productos');   


    # creacion de formulario registro

Route::get('/clientes/crear', [ClienteController::class, 'create'])
    ->name('clientes.create');

Route::post('/clientes', [ClienteController::class, 'store'])
    ->name('clientes.store');




    