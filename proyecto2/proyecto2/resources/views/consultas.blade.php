<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CONSULTAS') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>New Age - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
      </head>
      <div class="py-12 bg-dark min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="content-section-heading text-center">
                        <h3 class="text-secondary mb-0">Últimas preguntas</h3>
                        <h2 class="mb-5 text-white">Listado consultas</h2>
                    </div>
                    @foreach ($consultas as $consulta)
                    <div class="w-full mb-8 rounded-lg p-6 shadow-md bg-custom-blue text-white">
                        <p class="mb-2"><strong>Nombre de la mascota:</strong> {{ $consulta->nombre }}</p>
                        <p class="mb-2"><strong>Especie:</strong> {{ $consulta->especie }}</p>
                        <p class="mb-2"><strong>Edad:</strong> {{ $consulta->edad }}</p>
                        <p class="mb-2"><strong>Síntomas:</strong> {{ $consulta->sintomas }}</p>
                        <p class="mb-2"><strong>Comentarios adicionales:</strong> {{ $consulta->comentarios }}</p>
                        @if ($consulta->respuesta)
                        <p class="mb-2"><strong>Respuesta:</strong> {{ $consulta->respuesta }}</p>
                    @endif
                        <form action="{{ route('consultas.destroy', $consulta->id) }}" method="POST" class="text-right">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                         <form action="{{ route('responder.consulta', $consulta->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="consulta_id" value="{{ $consulta->id }}">

                    </form>
                    @if(auth()->user()->hasRole('employee'))
                    <form action="{{ route('responder.consulta') }}" method="POST">
                        @csrf
                        <input type="hidden" name="consulta_id" value="{{ $consulta->id }}">
                        <div class="form-group">
                            <label for="respuesta">Respuesta:</label>
                            <textarea class="form-control" id="respuesta" name="respuesta" rows="3">{{ auth()->user()->name }}:</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar Respuesta</button>
                    </form>
                    @endif
                </div>
                <br>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('registro.footer')
