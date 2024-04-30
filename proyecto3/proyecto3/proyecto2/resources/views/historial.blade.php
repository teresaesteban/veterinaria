<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('HISTORIAL CLÍNICO') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    @if(session('citaGuardada'))
                        <div class="bg-green-500 text-white p-4 mb-4">
                            {{ session('citaGuardada') }}
                        </div>
                    @endif

                    <!-- Botón para mostrar el formulario de agregar cita -->
                    <button id="mostrarFormulario" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">
                        {{ __('Agregar Cita') }}
                    </button>

                    <!-- Contenedor del formulario de agregar cita -->
                    <div id="formularioCita" class="hidden mt-4">
                        <h3 class="text-lg font-semibold mb-4 text-white">{{ __('Agregar Cita') }}</h3>
                        <form action="{{ route('citas.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="fecha" class="block text-sm font-medium text-white">Fecha de la Cita:</label>
                                <input type="date" name="fecha" id="fecha" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md">
                            </div>
                            <div class="mb-4">
                                <label for="motivo" class="block text-sm font-medium text-white">Motivo de la Cita:</label>
                                <textarea name="motivo" id="motivo" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="diagnostico" class="block text-sm font-medium text-white">Diagnóstico:</label>
                                <textarea name="diagnostico" id="diagnostico" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="tratamiento" class="block text-sm font-medium text-white">Tratamiento:</label>
                                <textarea name="tratamiento" id="tratamiento" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">{{ __('Guardar Cita') }}</button>
                            </div>
                        </form>
                    </div>

                    <!-- Contenedor del formulario de modificar cita (inicialmente oculto) -->
                    <div id="formularioModificarCita" class="hidden mt-4">
                        <h3 class="text-lg font-semibold mb-4 text-white">{{ __('Modificar Cita Guardada') }}</h3>
                        <form id="formModificarCita" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="fecha_modificar" class="block text-sm font-medium text-white">Fecha de la Cita:</label>
                                <input type="date" name="fecha_modificar" id="fecha_modificar" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md">
                            </div>
                            <div class="mb-4">
                                <label for="motivo_modificar" class="block text-sm font-medium text-white">Motivo de la Cita:</label>
                                <textarea name="motivo_modificar" id="motivo_modificar" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="diagnostico_modificar" class="block text-sm font-medium text-white">Diagnóstico:</label>
                                <textarea name="diagnostico_modificar" id="diagnostico_modificar" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="tratamiento_modificar" class="block text-sm font-medium text-white">Tratamiento:</label>
                                <textarea name="tratamiento_modificar" id="tratamiento_modificar" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-blue-600 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">{{ __('Guardar Cambios') }}</button>
                            </div>
                        </form>
                    </div>

                    <form action="{{ route('citas.index') }}" method="GET" class="mb-4">
                        @csrf
                        <label for="mascota_id" class="block text-sm font-medium text-white">Selecciona Mascota:</label>
                        <select name="mascota_id" id="mascota_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md">
                            @foreach($mascotas as $mascota)
                                <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">{{ __('Mostrar Historial') }}</button>
                    </form>

                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4 text-white">{{ __('Citas Registradas') }}</h3>
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Fecha') }}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Motivo de Cita') }}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Diagnóstico') }}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Tratamiento') }}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Acciones') }}</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-900 ">
                                <!-- Iterar sobre cada cita -->
                                @foreach($citas as $cita)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-white">{{ $cita->fecha }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-white">{{ $cita->motivo }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-white">{{ $cita->diagnostico }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-white">{{ $cita->tratamiento }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <!-- Botón para mostrar el formulario de modificar cita -->
                                            <button onclick="mostrarModificarFormulario({{ $cita->id }}, '{{ $cita->fecha }}', '{{ $cita->motivo }}', '{{ $cita->diagnostico }}', '{{ $cita->tratamiento }}')" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                                                {{ __('Modificar') }}
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Fin de la iteración -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('registro.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Función para mostrar el formulario de modificar cita con los datos de la cita seleccionada
        window.mostrarModificarFormulario = function(id, fecha, motivo, diagnostico, tratamiento) {
            // Llenamos el formulario con los datos de la cita seleccionada
            document.getElementById('fecha_modificar').value = fecha;
            document.getElementById('motivo_modificar').value = motivo;
            document.getElementById('diagnostico_modificar').value = diagnostico;
            document.getElementById('tratamiento_modificar').value = tratamiento;
            // Cambiamos la acción del formulario para que apunte a la ruta de la cita específica
            document.getElementById('formModificarCita').action = '{{ route('citas.update', '__ID__') }}'.replace('__ID__', id);
            // Mostramos el formulario de modificar cita
            document.getElementById('formularioModificarCita').classList.remove('hidden');
        }

        // Función para mostrar el formulario de agregar cita
        document.getElementById('mostrarFormulario').addEventListener('click', function() {
            document.getElementById('formularioCita').classList.remove('hidden');
        });
    });
</script>

