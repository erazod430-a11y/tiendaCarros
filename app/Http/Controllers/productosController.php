<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class productosController extends Controller
{
    public function index(): View
    {
        $productos = productos::latest()->get();

        return view('clientes.productos', compact('productos'));
    }

}
