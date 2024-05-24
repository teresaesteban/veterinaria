
<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"id="header-title">
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
  <body id="page-top">

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-white">
                @if(!Auth::user()->hasRole('employee'))

                <!-- Mostrar usuario con identificador -->
                <header class="py-5">
                    <div class="container px-5 pb-5">
                        <div class="row gx-5 align-items-center">
                                <!-- Header text content-->
                                <div class="text-center text-xxl-start">
                                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">{{ auth()->user()->name }}</div></div>
                                    <div class="fs-3 fw-light text-muted" id="Paracrearunanuevamascota"> Para crear una nueva mascota, haz clic en el botón azul. Para ver el historial de tu mascota, haz clic en tu perfil. </div>
                                    <h1 class="display-3 fw-bolder mb-5"id="Bienvenidoalhistorial"><span class="text-white d-inline">Bienvenido al historial clínico de tu mascota </span></h1>
                                </div>
                            </div>
                                <!-- Header profile picture-->
                                <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10">
                                                <div class="card shadow">
                                                    <div class="card-header bg-gradient-primary-to-secondary py-3">
                                                        <h6 class="m-0 font-weight-bold text-white" id="table-header">Tabla de usuarios y mascotas</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                    <div class="mt-8">
                                        <h3 class="text-lg font-semibold mb-4 text-black"id="tuusuario">{{ __('Tu Usuario') }}</h3>
                                        <table class="table table-striped table-bordered">
                                            <thead class="thead-dark">
                                                <tr class="bg-gradient-primary-to-secondary text-white">
                                                    <th scope="col"id="nombre">{{ __('Nombre') }}</th>
                                                    <th scope="col"id="email">{{ __('Email') }}</th>
                                                    <th scope="col"id="mascota">{{ __('Mascota') }}</th>
                                                    <th scope="col"id="acciones">{{ __('Acciones') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('usuarios.mascota', ['usuario' => auth()->user()->id]) }}" class="text-black hover:text-black-400 hover:underline thick-underline">{{ auth()->user()->name }}</a>


                                                    </td>
                                                    <td>
                                                        <div class="">{{ auth()->user()->email }}</div>
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

                                                        <div class="" id="Sinmascotas">Sin mascotas</div>

                                                    @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('usuarios.agregar-mascota', ['usuario' => auth()->user()->id]) }}" class="btn bg-gradient-primary-to-secondary text-white"id="agregar-mascota">Añadir mascota</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div>
                    </div>
                </header>

                @elseif(auth()->user()->hasRole('employee'))
                <header class="py-5">
                    <div class="container px-5 pb-5">
                        <div class=" align-items-center">

                                <!-- Header text content-->
                                <div class="text-center text-xxl-start">
                                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">{{ auth()->user()->name }}</div></div>
                                    <div class="fs-3 fw-light text-muted"id="Paracrearunanuevamascota1"> Para crear una nueva mascota, haz clic en el botón verde. Para ver el historial de tu mascota, haz clic en tu perfil. </div>
                                    <h1 class="display-3 fw-bolder mb-5"id="Bienvenidoalhistorial1"><span class="text-white d-inline">Bienvenido al buscador de usuarios </span></h1>
                                </div>



                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <div class="mt-8">
                                        <div class="mb-8">
                                            <form action="{{ route('usuarios.search') }}" method="GET">
                                                <div class="flex items-center border-b border-gray-600 py-2">
                                                    <input type="text" name="search" id="search" placeholder="Buscar usuarios..." class="bg-transparent text-white border-none focus:outline-none">
                                                    <button type="submit" class="ml-2 bg-gray-600 px-4 py-2 rounded-md hover:bg-gray-700"id="search1">Buscar</button>
                                                </div>
                                                <br>
                                            </form>
                                        </div>

                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <div class="card shadow">
                                                        <div class="card-header bg-gradient-primary-to-secondary py-3">
                                                            <h6 class="m-0 font-weight-bold text-white" id="table-header">Tabla de usuarios y mascotas</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead class="thead-dark">
                                                <tr class="bg-gradient-primary-to-secondary text-white">
                                                    <th scope="col"id="nombre">{{ __('Nombre') }}</th>
                                                    <th scope="col"id="email">{{ __('Email') }}</th>
                                                    <th scope="col"id="mascota">{{ __('Mascota') }}</th>
                                                    <th scope="col"id="acciones">{{ __('Acciones') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-gray-900">
                                                <!-- Ejemplo de fila, reemplazar con registros reales de usuarios -->

                                                @foreach($usuarios as $usuario)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <a href="{{ route('usuarios.mascota', ['usuario' => $usuario->id]) }}" class="text-black hover:text-black-400 hover:underline thick-underline">{{ $usuario->name }}</a>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm">{{ $usuario->email }}</div>
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
                                                            <div class="text-sm"id="Sinmascotas">Sin mascotas</div>
                                                        @endif
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <a href="{{ route('usuarios.agregar-mascota', ['usuario' => $usuario->id]) }}" class="btn bg-gradient-primary-to-secondary text-white"id="agregar-mascota">Añadir mascota</a>
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
                                            </div>
                                        </div>
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
<script>
    function translatePage(language) {
      const translations = {
        en: {
            'header-title':'HISTORY',
            "Paracrearunanuevamascota":"To create a new pet, click on the blue button. To view your pet's history, click on your profile.",
            'Bienvenidoalhistorial':'Welcome to the pet history',
            'search':'Search',
            'Sinmascotas':'No pets yet',
            'agregar-mascota':'Add Pet',
            'nombre':'name',
            'email':'email',
            'mascota':'pet',
            'acciones':'actions',
            'tuusuario':'your user',
            "Paracrearunanuevamascota1":"To create a new pet, click on the blue button. To view your pet's history, click on your profile.",
            'Bienvenidoalhistorial1':'Welcome to the pet history',
            'search1':'Search',
            'Sinmascotas1':'No pets yet',
            'agregar-mascota1':'Add Pet',
            'nombre1':'name',
            'email1':'email',
            'mascota1':'pet',
            'acciones1':'actions',
            'tuusuario1':'your user',
            "footer-copyright": "© 2024 Vet Clinic. All rights reserved.",
                "footer-contact": "CONTACT US",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com",
                "Inicio":"{{ __('HOME') }}",
                "Calendario":"{{ __('CALENDAR') }}",
                "Historial":"{{ __('HISTORY') }}",
                "Consultas":"{{ __('CONSULTS') }}",
                "Gestion":"{{ __('EMPLOYEES') }}",
                "Soporte":"{{ __('SUPPORT') }}",
                "Quelepasa":"{{ __('WHAT´S WRONG WITH MY PET') }}",
                "idioma":"Language",


        },
        es: {
            'Paracrearunanuevamascota': 'Para crear una nueva mascota, haz clic en el botón azul. Para ver el historial de tu mascota, haz clic en tu perfil.',
            'Bienvenidoalhistorial': 'Bienvenido al historial de mascotas',
            'search': 'Buscar',
            'Sinmascotas': 'No tienes mascotas',
            'header-title': 'HISTORIAL',
            'agregar-mascota': 'Agregar Mascota',
            'nombre': 'nombre',
            'email': 'email',
            'mascota': 'mascota',
            'acciones': 'acciones',
            'tuusuario': 'tu usuario',
            'Paracrearunanuevamascota1': 'Para crear una nueva mascota, haz clic en el botón azul. Para ver el historial de tu mascota, haz clic en tu perfil.',
            'Bienvenidoalhistorial1': 'Bienvenido al historial de mascotas',
            'search1': 'Buscar',
            'Sinmascotas1': 'No tienes mascotas',
            'header-title1': 'HISTORIAL',
            'agregar-mascota1': 'Agregar Mascota',
            'nombre1': 'nombre',
            'email1': 'email',
            'mascota1': 'mascota',
            'acciones1': 'acciones',
            'tuusuario1': 'tu usuario',
            "footer-copyright": "© 2024 Vet Clinic. Todos los derechos reservados.",
                "footer-contact": "CONTACTE CON NOSOTROS",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com",
                "Inicio": "{{ __('INICIO') }}",
        "Calendario": "{{ __('CALENDARIO') }}",
        "Historial": "{{ __('HISTORIAL') }}",
        "Consultas": "{{ __('CONSULTAS') }}",
        "Gestion": "{{ __('GESTION DE EMPLEADOS') }}",
        "Soporte": "{{ __('SOPORTE') }}",
        "Quelepasa": "{{ __('¿QUE LE PASA A MI MASCOTA') }}",
        "idioma": "Idioma",

        }
      };

      // Actualizar el texto en la página según el idioma seleccionado
      Object.keys(translations[language]).forEach(key => {
        const element = document.getElementById(key);
        if (element) {
          element.textContent = translations[language][key];
        }
      });
    }
  </script>