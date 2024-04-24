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


                            </tbody>
                        </table>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4 text-white">{{ __('Registro de Citas') }}</h3>
                        <div>
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

                        <div class="mt-8">
                            <h3 class="text-lg font-semibold mb-4 text-white">{{ __('Citas Registradas') }}</h3>
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Fecha') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Motivo de Cita') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Diagnóstico') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider text-white">{{ __('Tratamiento') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-gray-900 ">
                                    <!-- Example row, replace with actual appointment records -->
                                    @foreach($citas as $cita)
                                    <tr >
                                        <td class="px-6 py-4 whitespace-nowrap ">
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
                                    </tr>
                                @endforeach
                                    <!-- End of example row -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('registro.footer')
