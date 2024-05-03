<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('¿QUÉ LE PASA A MI MASCOTA?') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-dark">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('guardar-consulta') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-white font-bold mb-2">Nombre de tu mascota:</label>
                            <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="especie" class="block text-gray-700 text-white font-bold mb-2">Especie:</label>
                            <input type="text" name="especie" id="especie" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="edad" class="block text-gray-700 text-white font-bold mb-2">Edad:</label>
                            <input type="text" name="edad" id="edad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300">
                        </div>
                        <div class="mb-4">
                            <label for="sintomas" class="block text-gray-700 text-white font-bold mb-2">Síntomas:</label>
                            <textarea name="sintomas" id="sintomas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="comentarios" class="block text-gray-700 text-white font-bold mb-2">Comentarios adicionales:</label>
                            <textarea name="comentarios" id="comentarios" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300"></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-gray-900 dark:bg-black dark:text-gray-300 dark:hover:bg-gray-800">Enviar consulta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('registro.footer')

