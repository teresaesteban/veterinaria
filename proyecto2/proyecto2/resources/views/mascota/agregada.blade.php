<!-- resources/views/mascota/agregada.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mascota Agregada') }}
        </h2>
    </x-slot>
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
 <!-- Page content-->
  <section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="text-center">
                    <i class="bi bi-heart icon-feature text-gradient d-block mb-3"></i>
                </div>
                <h1 class="fw-bolder">Crea tu mascota!</h1>
                <p class="lead fw-normal text-muted mb-0">Gracias por confiar en nosotros</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
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
                            <button type="submit" class="bg-primary hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">Guardar Mascota</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</x-app-layout>
@include('registro.footer')
