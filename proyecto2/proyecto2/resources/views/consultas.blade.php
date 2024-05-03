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
                        <div class="bg-white dark:bg-gray-800 rounded p-4 shadow-md relative">
                            <p><strong>Nombre de la mascota:</strong> {{ $consulta->nombre }}</p>
                            <p><strong>Especie:</strong> {{ $consulta->especie }}</p>
                            <p><strong>Edad:</strong> {{ $consulta->edad }}</p>
                            <p><strong>Síntomas:</strong> {{ $consulta->sintomas }}</p>
                            <p><strong>Comentarios adicionales:</strong> {{ $consulta->comentarios }}</p>
                            <form action="{{ route('consultas.destroy', $consulta->id) }}" method="POST" class="absolute top-0 right-0 m-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('registro.footer')