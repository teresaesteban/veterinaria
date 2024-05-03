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
                <div class="p-6 bg-white border-b border-gray-200 text-black">
                    @if ($mascota)
                        <p><span >Nombre:</span> {{ $mascota->nombre }}</p>
                        <p><span >Tipo:</span> {{ $mascota->tipo }}</p>
                        <p><span >Edad:</span> {{ $mascota->edad }}</p>
                    @else
                        <p><span>No se encontró información de la mascota.</span></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('registro.footer')


