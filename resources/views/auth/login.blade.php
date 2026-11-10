
<x-guest-layout>

    <div class="w-full max-w-md mx-auto">

        <div class="text-center mb-8">

            <div class="flex justify-center mb-5">
                <div class="w-16 h-16 rounded-full border-2 border-yellow-500 flex items-center justify-center bg-gray-900 shadow-lg">
                    <span class="text-2xl font-black text-yellow-500">EM</span>
                </div>
            </div>

            <h1 class="text-4xl font-black tracking-widest text-gray-900">
                ELITE <span class="text-yellow-600">MOTORS</span>
            </h1>

            <div class="w-20 h-1 bg-yellow-500 mx-auto mt-4 mb-5 rounded"></div>

            <h2 class="text-2xl font-bold text-gray-800">
                Bienvenido nuevamente
            </h2>

            <p class="text-gray-500 text-sm mt-2">
                Tu próximo vehículo está más cerca de lo que imaginas.
            </p>

        </div>

        <x-auth-session-status
            class="mb-4"
            :status="session('status')"
        />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">

            @csrf

            <div>
                <x-input-label
                    for="email"
                    value="Correo electrónico"
                    class="font-semibold text-gray-700"
                />

                <x-text-input
                    id="email"
                    class="block mt-2 w-full rounded-lg border-gray-300 focus:border-yellow-500 focus:ring-yellow-500"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="ejemplo@correo.com"
                />

                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-2"
                />
            </div>

            <div>
                <x-input-label
                    for="password"
                    value="Contraseña"
                    class="font-semibold text-gray-700"
                />

                <x-text-input
                    id="password"
                    class="block mt-2 w-full rounded-lg border-gray-300 focus:border-yellow-500 focus:ring-yellow-500"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="Ingresa tu contraseña"
                />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2"
                />
            </div>

            <div class="flex flex-wrap items-center justify-between gap-3">

                <label for="remember_me" class="inline-flex items-center">

                    <input
                        id="remember_me"
                        type="checkbox"
                        name="remember"
                        class="rounded border-gray-300 text-yellow-600 shadow-sm focus:ring-yellow-500"
                    >

                    <span class="ms-2 text-sm text-gray-600">
                        Recordar mi sesión
                    </span>

                </label>

                @if (Route::has('password.request'))
                    <a
                        href="{{ route('password.request') }}"
                        class="text-sm font-medium text-yellow-700 hover:text-yellow-900 hover:underline"
                    >
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif

            </div>

            <div>
                <x-primary-button
                    class="w-full justify-center py-3 bg-gray-900 hover:bg-yellow-600 active:bg-yellow-700 focus:bg-yellow-600 transition duration-300 text-white rounded-lg border border-yellow-600 shadow-md tracking-wider"
                >
                    INGRESAR A MI CUENTA
                </x-primary-button>
            </div>

        </form>

        <div class="mt-8 text-center border-t border-gray-200 pt-6">

            <p class="text-sm text-gray-600">
                ¿Todavía no tienes una cuenta?
            </p>

            <a
                href="{{ route('register') }}"
                class="inline-block mt-3 font-bold text-yellow-700 hover:text-yellow-900 transition tracking-wide"
            >
                CREAR CUENTA EN ELITE MOTORS
            </a>

        </div>

        <div class="mt-8 rounded-lg overflow-hidden relative">

            <div class="bg-gray-900 p-4 text-center">
                <p class="text-yellow-500 text-xs font-bold tracking-widest">
                    ELITE MOTORS
                </p>

                <p class="text-gray-300 text-xs mt-1">
                    CALIDAD · CONFIANZA · EXCELENCIA AUTOMOTRIZ
                </p>
            </div>

        </div>

    </div>

</x-guest-layout>
