<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Elite Motors | Autos de Lujo</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">

            <!-- Nombre de la página -->
            <a class="navbar-brand fw-bold" href="#">
                ELITE MOTORS 
            </a>

            <!-- Botón para dispositivos móviles -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Mostrar menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Opciones del menú -->
            <div
                class="collapse navbar-collapse"
                id="menuPrincipal"
            >
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#productos">
                            Nuestros vehículos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">
                            Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">
                            Contacto
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de bienvenida -->
    <header
        id="inicio"
        class="bg-dark text-white py-5"
    >
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <span class="badge bg-warning text-dark mb-3">
                        AUTOS DE LUJO
                    </span>

                    <h1 class="display-3 fw-bold">
                        Exclusividad sobre ruedas
                    </h1>

                    <p class="lead">
                       Vehículos premium seleccionados para quienes buscan elegancia, potencia y exclusividad. 
                    </p>

                    <a
                        href="#productos"
                        class="btn btn-warning btn-lg mt-3"
                    >
                        Ver Nuestros vehículos
                    </a>
                </div>

                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <span class="display-1">
                        🚗 
                    </span>

                    <h2 class="mt-3">
                        Donde el lujo se convierte en experiencia
                    </h2>
                </div>

            </div>
        </div>
    </header>

    <!-- Sección de productos -->
    <section id="productos" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Nuestros autos
                </h2>

                <p class="text-secondary">
                    Descubre nuestra selección de vehículos premium
                </p>
            </div>

            <div class="row g-4">

                <!-- Tarjeta 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1000&q=80"
                                class="card-img-top object-fit-cover"
                                alt="Mercedes-Benz Clase S"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-danger align-self-start mb-2">
                                Premium
                            </span>

                            <h3 class="card-title h5">
                                Mercedes-Benz Clase S
                            </h3>

                            <p class="card-text text-secondary">
                                Elegancia, tecnología y confort en un sedán premium diseñado
                                para una experiencia de conducción excepcional.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $520.000.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Ver vehículo
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=1000&q=80"
                                class="card-img-top object-fit-cover"
                                alt="BMW M8 Competition"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning text-dark align-self-start mb-2">
                                Deportivo
                            </span>

                            <h3 class="card-title h5">
                                BMW M8 Competition
                            </h3>

                            <p class="card-text text-secondary">
                                Potencia, deportividad y sofisticación en un vehículo de alto
                                rendimiento.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $680.000.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Ver vehículo
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80"
                                class="card-img-top object-fit-cover"
                                alt="Porsche 911 Carrera"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-info text-dark align-self-start mb-2">
                                Exclusivo
                            </span>

                            <h3 class="card-title h5">
                                Porsche 911 Carrera
                            </h3>

                            <p class="card-text text-secondary">
                                Mercedes-Benz Clase S acompañado de abundante leche
                                inigualable.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $720.000.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Ver vehículo
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&w=1000&q=80"
                                class="card-img-top object-fit-cover"
                                alt="Range Rover Autobiography"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-primary align-self-start mb-2">
                                Luxury SUV
                            </span>

                            <h3 class="card-title h5">
                                Range Rover Autobiography
                            </h3>

                            <p class="card-text text-secondary">
                                Lujo, espacio y tecnología avanzada para recorrer cada camino
                                con máximo confort.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $850.000.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    Ver vehículo
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección nosotros -->
    <section id="nosotros" class="bg-white py-5">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-md-6">
                    <span class="display-1">
                        🏎️
                    </span>

                    <h2 class="fw-bold mt-3">
                        Una nueva definición de lujo
                    </h2>

                    <p class="text-secondary">
                        Seleccionamos vehículos de las marcas más reconocidas del mundo
                        para ofrecer a nuestros clientes una experiencia exclusiva,
                        segura y respaldada por atención personalizada.
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 bg-warning-subtle">
                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold">
                                ¿Por qué elegir Elite Motors?
                            </h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent">
                                    ✓ Vehículos premium cuidadosamente seleccionados
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Atención personalizada
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Asesoría especializada
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Procesos de compra transparentes
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="py-5">
        <div class="container text-center">

            <h2 class="fw-bold">
                Visítanos
            </h2>

            <p class="text-secondary">
                Conoce nuestro showroom y descubre una selección de vehículos
                diseñados para superar tus expectativas.
            </p>

            <div class="row justify-content-center mt-4">

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📍</div>
                            <h3 class="h5">Dirección</h3>
                            <p class="mb-0">Pasto, Nariño, Colombia</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">🗓️</div>
                            <h3 class="h5">Horario de atención</h3>
                            <p class="mb-0">Lunes a sábado, 8:00 a. m.–6:00 p. m.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📞</div>
                            <h3 class="h5">Teléfono</h3>
                            <p class="mb-0">300 000 0000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-1 fw-bold">
                🏎️ ELITE MOTORS
            </p>

            <p class="mb-0 text-white-50">
                Autos de lujo, exclusividad y alto rendimiento.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
<?php /**PATH C:\Users\Lab Programacion\Downloads\luisa\tiendaCarros\resources\views/welcome.blade.php ENDPATH**/ ?>