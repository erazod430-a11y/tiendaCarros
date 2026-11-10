
<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
                <h2 class="font-black text-2xl tracking-widest text-gray-900">
                    ELITE <span class="text-yellow-600">MOTORS</span>
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    Plataforma de compraventa de vehículos
                </p>
            </div>

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-yellow-500 font-bold">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div>
                    <p class="text-xs text-gray-400">Bienvenido</p>
                    <p class="text-sm font-bold text-gray-800">
                        {{ Auth::user()->name }}
                    </p>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gray-100 py-10">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-2xl shadow-2xl mb-12 min-h-[420px] flex items-center"
                 style="background-image: linear-gradient(90deg, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.75) 48%, rgba(0,0,0,0.15) 100%), url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1800&q=85'); background-size: cover; background-position: center;">

                <div class="relative z-10 p-8 md:p-14 max-w-2xl">

                    <span class="inline-block text-yellow-500 text-xs font-black tracking-[0.3em] uppercase border border-yellow-500 px-4 py-2 rounded-full">
                        Bienvenido a Elite Motors
                    </span>

                    <h1 class="text-4xl md:text-6xl font-black text-white mt-7 leading-tight">
                        ENCUENTRA
                        <span class="text-yellow-500">TU PRÓXIMO</span>
                        VEHÍCULO
                    </h1>

                    <p class="text-gray-300 mt-6 text-base md:text-lg leading-relaxed">
                        Descubre nuestro catálogo de automóviles,
                        compara opciones y encuentra el vehículo
                        que se adapta a tus necesidades.
                    </p>

                    <a href="{{ route('productos.index') }}"
                       class="inline-flex items-center justify-center mt-8 px-8 py-4 bg-yellow-500 hover:bg-yellow-600 text-gray-950 font-black text-sm tracking-wider rounded-lg transition duration-300 shadow-xl">
                        EXPLORAR CATÁLOGO
                        <span class="ml-3 text-xl">→</span>
                    </a>

                </div>
            </div>

            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">

                <div>
                    <p class="text-yellow-600 font-bold text-xs tracking-[0.25em] uppercase">
                        Explora Elite Motors
                    </p>

                    <h2 class="text-3xl font-black text-gray-900 mt-2">
                        PANEL PRINCIPAL
                    </h2>

                    <p class="text-gray-500 mt-2">
                        Administra tu experiencia dentro de nuestra plataforma.
                    </p>
                </div>

                <div class="hidden md:block">
                    <span class="text-gray-400 text-xs font-bold tracking-widest">
                        CALIDAD · CONFIANZA · AUTOMÓVILES
                    </span>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-7">

                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 group">

                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=900&q=85"
                            alt="Automóvil deportivo"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                        <span class="absolute bottom-4 left-5 text-white font-bold tracking-widest text-sm">
                            CATÁLOGO
                        </span>
                    </div>

                    <div class="p-7">

                        <h3 class="text-xl font-black text-gray-900">
                            Vehículos disponibles
                        </h3>

                        <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                            Explora los vehículos publicados y encuentra
                            diferentes opciones para tu próxima compra.
                        </p>

                        <a href="{{ route('productos.index') }}"
                           class="inline-flex items-center mt-6 text-yellow-700 font-black text-sm hover:text-yellow-900 transition">
                            VER CATÁLOGO
                            <span class="ml-2">→</span>
                        </a>

                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 group">

                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1489824904134-891ab64532f1?auto=format&fit=crop&w=900&q=85"
                            alt="Vehículo en exhibición"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                        <span class="absolute bottom-4 left-5 text-white font-bold tracking-widest text-sm">
                            COMPRAVENTA
                        </span>
                    </div>

                    <div class="p-7">

                        <h3 class="text-xl font-black text-gray-900">
                            Vende tu vehículo
                        </h3>

                        <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                            Prepara tu automóvil para publicarlo
                            y ponerlo a disposición de compradores interesados.
                        </p>

                        <span class="inline-block mt-6 text-gray-400 font-bold text-sm">
                            PRÓXIMAMENTE
                        </span>

                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 group">

                    <div class="relative h-48 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1507136566006-cfc505b114fc?auto=format&fit=crop&w=900&q=85"
                            alt="Automóvil de lujo"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                        <span class="absolute bottom-4 left-5 text-white font-bold tracking-widest text-sm">
                            MI CUENTA
                        </span>
                    </div>

                    <div class="p-7">

                        <h3 class="text-xl font-black text-gray-900">
                            Mi perfil
                        </h3>

                        <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                            Consulta y actualiza tus datos personales
                            y administra tu información de usuario.
                        </p>

                        <a href="{{ route('profile.edit') }}"
                           class="inline-flex items-center mt-6 text-yellow-700 font-black text-sm hover:text-yellow-900 transition">
                            ADMINISTRAR PERFIL
                            <span class="ml-2">→</span>
                        </a>

                    </div>
                </div>

            </div>

            <div class="mt-12 relative overflow-hidden rounded-2xl bg-gray-950 p-8 md:p-12">

                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">

                    <div>
                        <p class="text-yellow-500 font-bold text-xs tracking-[0.3em]">
                            ELITE MOTORS
                        </p>

                        <h3 class="text-2xl md:text-3xl font-black text-white mt-3">
                            EL CAMINO HACIA TU PRÓXIMO AUTO.
                        </h3>

                        <p class="text-gray-400 mt-3 text-sm">
                            Explora, compara y encuentra tu próximo vehículo.
                        </p>
                    </div>

                    <a href="{{ route('productos.index') }}"
                       class="shrink-0 px-7 py-4 bg-yellow-500 hover:bg-yellow-600 text-gray-950 font-black text-sm rounded-lg transition duration-300">
                        DESCUBRIR VEHÍCULOS →
                    </a>

                </div>

                <div class="absolute -right-10 -bottom-20 text-gray-800 text-9xl font-black opacity-30">
                    EM
                </div>

            </div>

            <footer class="text-center py-8">
                <p class="text-gray-400 text-xs tracking-widest">
                    ELITE MOTORS © {{ date('Y') }} · TODOS LOS DERECHOS RESERVADOS
                </p>
            </footer>

        </div>

    </div>

</x-app-layout>
