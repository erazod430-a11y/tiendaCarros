
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| Rutas protegidas de ELITE MOTORS
|--------------------------------------------------------------------------
| Todas las páginas requieren que el usuario haya iniciado sesión.
*/

Route::middleware(['auth'])->group(function () {

    // Página principal
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    // Menú principal
    Route::get('/menu', function () {
        return view('menu');
    })->name('menu');

    // Nosotros
    Route::get('/nosotros', function () {
        return view('nosotros');
    })->name('nosotros');

    // Contacto
    Route::get('/contacto', function () {
        return view('contacto');
    })->name('contacto');

    // Formulario
    Route::get('/formulario', function () {
        return view('formulario');
    })->name('formulario');


    /*
    |--------------------------------------------------------------------------
    | Clientes
    |--------------------------------------------------------------------------
    */

    Route::get('/clientes', [ClienteController::class, 'index'])
        ->name('clientes.index');

    Route::get('/clientes/crear', [ClienteController::class, 'create'])
        ->name('clientes.create');

    Route::post('/clientes', [ClienteController::class, 'store'])
        ->name('clientes.store');

    Route::get('/clientes/{cliente}/editar', [ClienteController::class, 'edit'])
        ->name('clientes.edit');

    Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])
        ->name('clientes.update');


   

    Route::get('/productos', [ProductosController::class, 'index'])
        ->name('productos.index');


   

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Perfil del usuario
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| Autenticación Laravel Breeze
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';