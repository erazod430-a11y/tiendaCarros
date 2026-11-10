
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ELITE MOTORS | Tu próximo vehículo</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .automotive-background {
            background-image:
                linear-gradient(
                    90deg,
                    rgba(0, 0, 0, 0.90),
                    rgba(0, 0, 0, 0.55),
                    rgba(0, 0, 0, 0.25)
                ),
                url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=2000&q=90');

            background-size: cover;
            background-position: center;
        }

        .gold-line {
            background: linear-gradient(90deg, #b8860b, #facc15, #b8860b);
        }

        .login-panel {
            background: rgba(255, 255, 255, 0.98);
        }
    </style>
</head>

<body class="antialiased">

    <main class="min-h-screen grid grid-cols-1 lg:grid-cols-2 bg-gray-950">

        <section class="automotive-background min-h-[300px] lg:min-h-screen flex flex-col justify-between p-8 md:p-14">

            <div>
                <h1 class="text-3xl md:text-4xl font-black tracking-widest text-white">
                    ELITE <span class="text-yellow-500">MOTORS</span>
                </h1>

                <div class="gold-line w-20 h-1 mt-4 rounded-full"></div>
            </div>

            <div class="max-w-xl py-10">

                <p class="text-yellow-400 font-bold text-xs md:text-sm tracking-[0.35em] uppercase">
                    Experiencia automotriz
                </p>

                <h2 class="text-4xl md:text-6xl font-black text-white leading-tight mt-6">
                    EL AUTO QUE
                    <span class="text-yellow-400">DESEAS.</span>
                    EL ESTILO QUE
                    <span class="text-yellow-400">MERECES.</span>
                </h2>

                <p class="text-gray-300 text-sm md:text-base mt-6 leading-relaxed max-w-md">
                    Descubre nuevas oportunidades, explora vehículos
                    y encuentra tu próximo automóvil en ELITE MOTORS.
                </p>

                <div class="flex items-center gap-3 mt-10">
                    <div class="gold-line w-12 h-1"></div>

                    <span class="text-white text-xs font-bold tracking-widest">
                        CALIDAD · CONFIANZA · EXCELENCIA
                    </span>
                </div>

            </div>

            <div>
                <p class="text-gray-400 text-xs tracking-widest">
                    ELITE MOTORS © {{ date('Y') }}
                </p>
            </div>

        </section>


        <section class="login-panel min-h-screen flex items-center justify-center px-5 py-10 md:px-12">

            <div class="w-full max-w-md">

                <div class="flex justify-center mb-8">

                    <div class="w-16 h-16 rounded-full bg-gray-950 border-2 border-yellow-500 flex items-center justify-center shadow-xl">

                        <span class="text-2xl font-black text-yellow-500">
                            EM
                        </span>

                    </div>

                </div>

                <div class="w-full">

                    {{ $slot }}

                </div>

                <div class="mt-10 text-center">

                    <div class="gold-line w-16 h-1 mx-auto rounded-full mb-4"></div>

                    <p class="text-gray-400 text-xs tracking-widest">
                        ELITE MOTORS · PASIÓN POR LOS AUTOMÓVILES
                    </p>

                </div>

            </div>

        </section>

    </main>

</body>
</html>
