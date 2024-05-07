
<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('HISTORIAL') }}
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
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

      </head>

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-white">
                @if(!Auth::user()->hasRole('employee'))

                <!-- Mostrar usuario con identificador -->
                <header class="py-5">
                    <div class="container px-5 pb-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-xxl-5">
                                <!-- Header text content-->
                                <div class="text-center text-xxl-start">
                                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">{{ auth()->user()->name }}</div></div>
                                    <div class="fs-3 fw-light text-muted"> Para crear una nueva mascota, haz clic en el botón verde. Para ver el historial de tu mascota, haz clic en tu perfil. </div>
                                    <h1 class="display-3 fw-bolder mb-5"><span class="text-white d-inline">Bienvenido al historial clínico de tu mascota </span></h1>
                                </div>
                            </div>
                            <div class="col-xxl-7">
                                <!-- Header profile picture-->
                                <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <div class="mt-8">
                                        <h3 class="text-lg font-semibold mb-4">{{ __('Tu Usuario') }}</h3>
                                        <table class="table table-striped table-bordered">
                                            <thead class="thead-dark">
                                                <tr class="bg-gradient-primary-to-secondary text-white">
                                                    <th scope="col">{{ __('Nombre') }}</th>
                                                    <th scope="col">{{ __('Email') }}</th>
                                                    <th scope="col">{{ __('Mascota') }}</th>
                                                    <th scope="col">{{ __('Acciones') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('usuarios.mascota', ['usuario' => auth()->user()->id]) }}" class="text-white">{{ auth()->user()->name }}</a>
                                                    </td>
                                                    <td>
                                                        <div class="text-white">{{ auth()->user()->email }}</div>
                                                    </td>
                                                    <td>
                                                        @if (auth()->user()->mascota)
                                                            <div class="text-white">Nombre: {{ auth()->user()->mascota->nombre }}</div>
                                                            <div class="text-white">Tipo: {{ auth()->user()->mascota->tipo }}</div>
                                                            <div class="text-white">Edad: {{ auth()->user()->mascota->edad }}</div>
                                                        @else
                                                            <div class="text-white">Sin mascota</div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('usuarios.agregar-mascota', ['usuario' => auth()->user()->id]) }}" class="btn btn-primary">Añadir mascota</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                        </div>
                    </div>
                </header>

                @elseif(auth()->user()->hasRole('employee'))
                <!-- Formulario de búsqueda de usuarios solo para empleados -->
                <div class="mb-8">
                    <form action="{{ route('usuarios.search') }}" method="GET">
                        <div class="flex items-center border-b border-gray-600 py-2">
                            <input type="text" name="search" id="search" placeholder="Buscar usuarios..." class="bg-transparent text-white border-none focus:outline-none">
                            <button type="submit" class="ml-2 bg-gray-600 px-4 py-2 rounded-md hover:bg-gray-700">Buscar</button>
                        </div>
                    </form>
                </div>

                <!-- Mostrar los resultados de la búsqueda de usuarios -->
                <div class="mt-8">
                    <h3 class="text-lg font-semibold mb-4">{{ __('Resultados de la Búsqueda') }}</h3>
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead class="bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Nombre') }}</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Email') }}</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Mascota') }}</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">{{ __('Acciones') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-900">
                            <!-- Ejemplo de fila, reemplazar con registros reales de usuarios -->
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- Enlace al detalle de la mascota -->
                                    <a href="{{ route('usuarios.mascota', ['usuario' => $usuario->id]) }}" class="text-white hover:text-gray-400">{{ $usuario->name }}</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-white">{{ $usuario->email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($usuario->mascota)
                                    <div class="text-sm text-white">Nombre: {{ $usuario->mascota->nombre }}</div>
                                    <div class="text-sm text-white">Tipo: {{ $usuario->mascota->tipo }}</div>
                                    <div class="text-sm text-white">Edad: {{ $usuario->mascota->edad }}</div>
                                    @else
                                    <div class="text-sm text-white">Sin mascota</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- Botón para añadir mascota, que redirige a la ruta para agregar mascota con el ID del usuario -->
                                    <a href="{{ route('usuarios.agregar-mascota', ['usuario' => $usuario->id]) }}" class="text-white hover:text-gray-400">Añadir mascota</a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Fin del ejemplo de fila -->
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</x-app-layout>

@include('registro.footer')
