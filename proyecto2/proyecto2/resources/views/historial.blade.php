<!-- usuarios/index.blade.php -->
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
                                    <!-- Puedes agregar más columnas según tus necesidades -->
                                </tr>
                            </thead>
                            <tbody class="bg-gray-900 ">
                                <!-- Ejemplo de fila, reemplazar con registros reales de usuarios -->
                                @foreach($usuarios as $usuario)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">{{ $usuario->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">{{ $usuario->email }}</div>
                                    </td>
                                    <!-- Puedes agregar más columnas aquí según tus necesidades -->
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
