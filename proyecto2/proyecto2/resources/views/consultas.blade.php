<!-- resources/views/consultas.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consultas') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-dark">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4 text-white">Listado de consultas:</h3>
                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($consultas as $consulta)
                        <div class="bg-white dark:bg-gray-800 rounded p-4 shadow-md">
                            <p><strong>Nombre de la mascota:</strong> {{ $consulta->nombre }}</p>
                            <p><strong>Especie:</strong> {{ $consulta->especie }}</p>
                            <p><strong>Edad:</strong> {{ $consulta->edad }}</p>
                            <p><strong>Síntomas:</strong> {{ $consulta->sintomas }}</p>
                            <p><strong>Comentarios adicionales:</strong> {{ $consulta->comentarios }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

