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
                        <p><span>Nombre:</span> {{ $mascota->nombre }}</p>
                        <p><span>Tipo:</span> {{ $mascota->tipo }}</p>
                        <p><span>Edad:</span> {{ $mascota->edad }}</p>
                    @else
                        <p><span>No se encontró información de la mascota.</span></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Botón para agregar cita -->
    <div class="p-6 bg-gray-800 dark:bg-gray-700 border-b border-gray-600 dark:border-gray-600">
        <button id="mostrarFormulario" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">
            {{ __('Agregar Cita') }}
        </button>
    </div>

    <!-- Contenedor del formulario de agregar cita -->
    <div id="formularioCita" class="hidden p-6 bg-gray-800 dark:bg-gray-700 border-b border-gray-600 dark:border-gray-600">
        <h3 class="text-lg font-semibold mb-4 text-white">{{ __('Agregar Cita') }}</h3>
        <form action="{{ route('citas.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="fecha" class="block text-sm font-medium text-gray-300">{{ __('Fecha de la Cita:') }}</label>
                <input type="date" name="fecha" id="fecha" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 text-black">
            </div>
            <div class="mb-4">
                <label for="motivo" class="block text-sm font-medium text-gray-300">{{ __('Motivo de la Cita:') }}</label>
                <textarea name="motivo" id="motivo" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 text-black"></textarea>
            </div>
            <div class="mb-4">
                <label for="diagnostico" class="block text-sm font-medium text-gray-300">{{ __('Diagnóstico:') }}</label>
                <textarea name="diagnostico" id="diagnostico" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 text-black"></textarea>
            </div>
            <div class="mb-4">
                <label for="tratamiento" class="block text-sm font-medium text-gray-300">{{ __('Tratamiento:') }}</label>
                <textarea name="tratamiento" id="tratamiento" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 text-black"></textarea>
            </div>
            <div>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-300 transition">
                    {{ __('Guardar Cita') }}
                </button>
            </div>
        </form>
    </div>

    <!-- Contenedor de las citas -->
    <div class="p-6 bg-dark dark:bg-gray-700 border-b border-gray-600 dark:border-gray-600">
        <h3 class="text-lg font-semibold mb-4 text-white">{{ __('Citas Registradas') }}</h3>
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
            <thead class="bg-gray-700 dark:bg-gray-600">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Fecha') }}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Motivo de Cita') }}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Diagnóstico') }}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Tratamiento') }}</th>
                </tr>
            </thead>
            <tbody class="bg-gray-900 dark:bg-gray-800 text-white">
                @foreach($citas as $cita)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cita->fecha }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cita->motivo }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cita->diagnostico }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cita->tratamiento }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
@include('registro.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Función para mostrar el formulario de agregar cita
        document.getElementById('mostrarFormulario').addEventListener('click', function() {
            document.getElementById('formularioCita').classList.remove('hidden');
        });
    });
</script>
