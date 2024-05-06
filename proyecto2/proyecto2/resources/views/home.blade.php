<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('HOME') }}
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
    <body id="page-top">
      <!-- Navigation-->

      <header class="masthead bg-dark">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="mb-7 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Bienvenido a la Clínica Veterinaria</h1>
                        <p class="lead fw-normal text-muted mb-5">Cuidando de tus mascotas como si fueran de la familia</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="masthead-device-mockup position-relative">
                        <!-- SVG del círculo de fondo -->
                        <svg class="circle position-absolute" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="60%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50" fill="url(#circleGradient)"></circle>
                        </svg>
                        <!-- Imagen encima del círculo -->
                        <img class="position-relative" src="images/image_processing20200423-26081-c7tp2o.png" alt=""width="60%">
                    </div>
                </div>
            </div>
        </div>
    </header>
  <!-- Quote/testimonial aside-->
  <aside class="text-center bg-gradient-primary-to-secondary">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xl-8">
              <div class="h2 fs-1 text-white mb-4">"Una forma sencilla de gestionar las visitas y cuidar de tus compañeros peludos, ¡todo en una sola aplicación!"</div>
            </div>
        </div>
    </div>
</aside>
<!-- App features section-->
<section id="features">
  <div class="container px-5">
    <div class="row justify-content-center"> <!-- Quité gx-5 para centrar el contenido -->
      <div class="col-lg-6 col-md-6 mb-5"> <!-- Cambié col-md-6 por col-lg-6 -->
        <!-- Feature item: Calendario -->
        <x-nav-link :href="url('full-calender')" :active="request()->routeIs('full-calender')">
          <div class="text-center">
            <i class="bi-calendar icon-feature text-gradient d-block mb-3"></i>
            <h3 class="font-alt">Calendario</h3>
            <p class="text-muted mb-0">Organiza citas y recordatorios importantes para tu mascota.</p>
          </div>
        </x-nav-link>
      </div>
      <div class="col-lg-6 col-md-6 mb-5"> <!-- Cambié col-md-6 por col-lg-6 -->
        <!-- Feature item: Historial Clínico -->
        <x-nav-link :href="route('usuarios.search')" :active="request()->routeIs('usuarios.search')">
          <div class="text-center">
            <i class="bi-file-earmark-medical icon-feature text-gradient d-block mb-3"></i>
            <h3 class="font-alt">Historial Clínico</h3>
            <p class="text-muted mb-0">Mantén un registro detallado de las visitas al veterinario, tratamientos y más.</p>
          </div>
        </x-nav-link>
      </div>
      <div class="col-lg-6 col-md-6 mb-5"> <!-- Cambié col-md-6 por col-lg-6 -->
        <!-- Feature item: Free to Use -->
        <x-nav-link :href="url('quelepasa')" :active="request()->routeIs('quelepasa')">
          <div class="text-center">
            <i class="bi bi-heart icon-feature text-gradient d-block mb-3"></i>
            <h3 class="font-alt">¿Qué le pasa a tu Mascota?</h3>
            <p class="text-muted mb-0">Pregunta a nuestros especialistas cualquier duda que te pueda surgir en el cuidado de tu mascota</p>
          </div>
        </x-nav-link>
      </div>
      <div class="col-lg-6 col-md-6 mb-5"> <!-- Cambié col-md-6 por col-lg-6 -->
        <!-- Feature item: ¿Qué le pasa a tu Mascota? -->
        <x-nav-link :href="url('home')" :active="request()->routeIs('home')">
          <div class="text-center">
            <i class="bi bi-house-door icon-feature text-gradient d-block mb-3"></i>
            <h3 class="font-alt">Sobre Nosotros</h3>
            <p class="text-muted mb-0">En la página principal podrás encontrar la información general de su funcionamiento</p>
          </div>
        </x-nav-link>
      </div>
    </div>
  </div>
</section>

        <!-- Basic features section-->

        <section class="bg-gradient-primary-to-secondary">
          <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
              <div class="col-sm-8 col-md-6">
                <div class="px-5 px-sm-0">
                  <img class="img-fluid" src="images/vet-assistant-png-dog-lady-people-pets-veterinarian-clipart-1212.png" alt="Imagen Sobre Nosotros" />
                </div>
              </div>
              <div class="col-12 col-lg-5">
                <h2 class="display-4 lh-1 mb-4">Sobre Nosotros</h2>
                <p class="text-white mb-5">
                  En VetClinic, nos esforzamos por brindar un entorno amigable y eficiente para que los veterinarios puedan registrar y acceder fácilmente a la información de los pacientes, administrar citas, llevar un historial clínico completo, y proporcionar un seguimiento más preciso y personalizado del estado de salud de las mascotas.
                </p>
                <p class="text-white mb-0"> <!-- Cambio de color del texto a primario -->
                  Con VetClinic, esperamos contribuir al bienestar y cuidado de todas las mascotas, ofreciendo a los profesionales veterinarios las herramientas necesarias para un servicio de calidad y a los dueños de mascotas la tranquilidad de contar con un equipo comprometido con la salud y felicidad de sus compañeros peludos.
                </p>
              </div>
            </div>
          </div>
        </section>


</x-app-layout>
@include('registro.footer')