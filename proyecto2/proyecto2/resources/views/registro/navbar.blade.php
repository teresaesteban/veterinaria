<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo a la izquierda -->
        <a class="navbar-brand" href="#" style="margin-right: auto;"> <!-- Ajustamos el margen derecho para mover el logo a la izquierda -->
            <img src="{{ asset('images/unnamed-removebg-preview.png') }}" alt="Logo" class="navbar-logo" style="max-width: 150px;"> <!-- Ajustamos el ancho máximo del logo -->
        </a>
        <button type="button" class="btn btn-lg" style="background-color: #CCCCCC; color: #FFFFFF; min-width: 150px;"> <!-- Ajustamos el ancho mínimo del botón -->
            <!-- Botón de inicio de sesión a la derecha -->
            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Inicia sesión</a>
                        @endauth
                    </div>
                @endif
            </div>
        </button>
    </div>
</nav>
