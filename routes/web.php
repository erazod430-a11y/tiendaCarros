
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductosController;

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {

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

    #creacion de rutas de edicion

Route::get(
    '/clientes/{cliente}/editar',
    [ClienteController::class, 'edit']
)->name('clientes.edit');

Route::put(
    '/clientes/{cliente}',
    [ClienteController::class, 'update']
)->name('clientes.update');

});


// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Perfil de usuario
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';
