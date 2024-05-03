<!-- resources/views/mascota/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Información de la mascota
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($mascota)
                        <p>Nombre: {{ $mascota->nombre }}</p>
                        <p>Tipo: {{ $mascota->tipo }}</p>
                        <p>Edad: {{ $mascota->edad }}</p>
                    @else
                        <p>No se encontró información de la mascota.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
