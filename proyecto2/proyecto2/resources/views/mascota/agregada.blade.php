<!-- resources/views/mascota/agregada.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mascota Agregada') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-black">
                    <p>Mascota agregada correctamente para el usuario {{ $usuario->name }}</p>

                    <!-- Formulario para ingresar datos de la mascota -->
                    <form action="{{ route('mascota.guardar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
                        <div class="mt-4">
                            <label for="nombre">Nombre de la mascota:</label>
                            <input type="text" name="nombre" id="nombre" class="form-input block w-full mt-1">
                        </div>
                        <div class="mt-4">
                            <label for="tipo">Tipo de mascota:</label>
                            <input type="text" name="tipo" id="tipo" class="form-input block w-full mt-1">
                        </div>
                        <div class="mt-4">
                            <label for="edad">Edad de la mascota:</label>
                            <input type="number" name="edad" id="edad" class="form-input block w-full mt-1">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">Guardar Mascota</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('registro.footer')
