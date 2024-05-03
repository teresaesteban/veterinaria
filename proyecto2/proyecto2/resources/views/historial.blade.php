<!-- historial.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('HISTORIAL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">

                    <!-- Formulario de búsqueda de usuarios -->
                    <div class="mb-8">
                        <form action="{{ route('usuarios.search') }}" method="GET">
                            <div class="flex items-center border-b border-gray-600 py-2">
                                <input type="text" name="search" id="search" placeholder="Buscar usuarios..." class="bg-transparent text-white border-none focus:outline-none">
                                <button type="submit" class="ml-2 bg-gray-600 px-4 py-2 rounded-md hover:bg-gray-700">Buscar</button>
                            </div>
                        </form>
                    </div>

                    <!-- Mostrar los resultados de la búsqueda de usuarios -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4">{{ __('Resultados de la Búsqueda') }}</h3>
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Nombre') }}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Email') }}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Mascota') }}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Acciones') }}</th> <!-- Agregamos una columna para las acciones -->
                                </tr>
                            </thead>
                            <tbody class="bg-gray-900">
                                <!-- Ejemplo de fila, reemplazar con registros reales de usuarios -->
                                @foreach($usuarios as $usuario)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <!-- Enlace al detalle de la mascota -->
                                        <a href="{{ route('usuarios.mascota', ['usuario' => $usuario->id]) }}" class="text-white hover:text-gray-400">{{ $usuario->name }}</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">{{ $usuario->email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($usuario->mascota)
                                            <div class="text-sm text-white">Nombre: {{ $usuario->mascota->nombre }}</div>
                                            <div class="text-sm text-white">Tipo: {{ $usuario->mascota->tipo }}</div>
                                            <div class="text-sm text-white">Edad: {{ $usuario->mascota->edad }}</div>
                                        @else
                                            <div class="text-sm text-white">Sin mascota</div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <!-- Botón para añadir mascota, que redirige a la ruta para agregar mascota con el ID del usuario -->
                                        <a href="{{ route('usuarios.agregar-mascota', ['usuario' => $usuario->id]) }}" class="text-white hover:text-gray-400">Añadir mascota</a>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- Fin del ejemplo de fila -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
