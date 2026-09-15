@extends('layouts.app')
 
@section('titulo', 'Inicio')
 
@section('contenido')
    <section class="container py-5">
        <div class="hero-cafe p-4 p-lg-5 shadow-sm">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="badge text-bg-warning mb-3">
                        Café colombiano
                    </span>
 
                    <h1 class="display-4 fw-bold titulo-seccion">
                        Una pausa con aroma a hogar
                    </h1>
 
                    <p class="lead text-secondary my-4">
                        Conoce bebidas preparadas con dedicación,
                        ingredientes seleccionados y mucha tradición.
                    </p>
 
                    <div class="d-flex flex-wrap gap-2">
                        <a class="btn btn-cafe btn-lg" href="{{ route('menu') }}">
                            <i class="bi bi-journal-richtext me-2"></i>
                            Explorar el menú
                        </a>
 
                        <a
                            class="btn btn-outline-dark btn-lg"
                            href="{{ route('nosotros') }}"
                        >
                            Conócenos
                        </a>
                    </div>
                </div>
 
                <div class="col-lg-5 text-center">
                    <div class="bg-white rounded-4 p-5 shadow-sm">
                        <i
                            class="bi bi-cup-hot-fill display-1"
                            style="color: var(--caramelo);"
                        ></i>
 
                        <h2 class="h4 mt-3 mb-1">Café recién preparado</h2>
                        <p class="text-secondary mb-0">
                            Calidad que se siente en cada taza.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="container pb-5">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card card-cafe h-100 shadow-sm">
                    <div class="card-body p-4">
                        <div class="icono-cafe">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h2 class="h5 mt-3">Calidad</h2>
                        <p class="text-secondary mb-0">
                            Seleccionamos cuidadosamente cada ingrediente.
                        </p>
                    </div>
                </div>
            </div>
 
            <div class="col-md-4">
                <div class="card card-cafe h-100 shadow-sm">
                    <div class="card-body p-4">
                        <div class="icono-cafe">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h2 class="h5 mt-3">Tradición</h2>
                        <p class="text-secondary mb-0">
                            Celebramos la cultura cafetera colombiana.
                        </p>
                    </div>
                </div>
            </div>
 
            <div class="col-md-4">
                <div class="card card-cafe h-100 shadow-sm">
                    <div class="card-body p-4">
                        <div class="icono-cafe">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h2 class="h5 mt-3">Servicio</h2>
                        <p class="text-secondary mb-0">
                            Creamos un espacio amable para compartir.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
