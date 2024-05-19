
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
                                    <div class="fs-3 fw-light text-muted"> Para crear una nueva mascota, haz clic en el botón azul. Para ver el historial de tu mascota, haz clic en tu perfil. </div>
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
                                                        @if (auth()->user()->mascota()->count() > 0)

                                                        <div class="text-white">Mascotas:</div>

                                                        @foreach (auth()->user()->mascota as $mascota)

                                                        <div class="container mt-5">


                                                                <div class="card bg-gradient-primary-to-secondary ">
                                                                  <div class="card-body text-black">
                                                                    <div class="text-white">Nombre: {{ $mascota->nombre }}</div>
                                                                    <div class="text-white">Tipo: {{ $mascota->tipo }}</div>
                                                                    <div class="text-white">Edad: {{ $mascota->edad }}</div>
                                                                  </div>


                                                            </div>
                                                          </div>

                                                        @endforeach

                                                    @else

                                                        <div class="text-white">Sin mascotas</div>

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
                <header class="py-5">
                    <div class="container px-5 pb-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-xxl-5">
                                <!-- Header text content-->
                                <div class="text-center text-xxl-start">
                                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">{{ auth()->user()->name }}</div></div>
                                    <div class="fs-3 fw-light text-muted"> Para crear una nueva mascota, haz clic en el botón verde. Para ver el historial de tu mascota, haz clic en tu perfil. </div>
                                    <h1 class="display-3 fw-bolder mb-5"><span class="text-white d-inline">Bienvenido al buscador de usuarios </span></h1>
                                </div>
                            </div>
                            <div class="col-xxl-7">

                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <div class="mt-8">
                                        <div class="mb-8">
                                            <form action="{{ route('usuarios.search') }}" method="GET">
                                                <div class="flex items-center border-b border-gray-600 py-2">
                                                    <input type="text" name="search" id="search" placeholder="Buscar usuarios..." class="bg-transparent text-white border-none focus:outline-none">
                                                    <button type="submit" class="ml-2 bg-gray-600 px-4 py-2 rounded-md hover:bg-gray-700">Buscar</button>
                                                </div>
                                            </form>
                                        </div>


                                        <table class="table table-striped table-bordered">
                                            <thead class="thead-dark">
                                                <tr class="bg-gradient-primary-to-secondary text-white">
                                                    <th scope="col">{{ __('Nombre') }}</th>
                                                    <th scope="col">{{ __('Email') }}</th>
                                                    <th scope="col">{{ __('Mascota') }}</th>
                                                    <th scope="col">{{ __('Acciones') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-gray-900">
                                                <!-- Ejemplo de fila, reemplazar con registros reales de usuarios -->

                                                @foreach($usuarios as $usuario)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <a href="{{ route('usuarios.mascota', ['usuario' => $usuario->id]) }}" class="text-white hover:text-gray-400">{{ $usuario->name }}</a>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-white">{{ $usuario->email }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        @if ($usuario->mascota && $usuario->mascota->count() > 0) <!-- Check if $usuario->mascotas is not null -->
                                                            <!-- Iterating over the mascotas -->
                                                            @foreach($usuario->mascota as $mascota)
                                                                <div class="card bg-gradient-primary-to-secondary">
                                                                    <div class="card-body text-black">
                                                                        <div class="text-white">Nombre: {{ $mascota->nombre }}</div>
                                                                        <div class="text-white">Tipo: {{ $mascota->tipo }}</div>
                                                                        <div class="text-white">Edad: {{ $mascota->edad }}</div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="text-sm text-white">Sin mascotas</div>
                                                        @endif
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <a href="{{ route('usuarios.agregar-mascota', ['usuario' => $usuario->id]) }}" class="btn btn-primary">Añadir mascota</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                                <!-- Fin del ejemplo de fila -->
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                        </div>
                    </div>
                </header>

                <!-- Formulario de búsqueda de usuarios solo para empleados -->


                @endif
            </div>
        </div>
    </div>
</div>
</x-app-layout>

@include('registro.footer')
