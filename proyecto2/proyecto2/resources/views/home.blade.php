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
                      <h1 class="display-1 lh-1 mb-3" id="clinic-title">Bienvenido a la Clínica Veterinaria</h1>
                      <div class="fs-3 fw-light text-muted" id="clinic-description">Cuidando de tus mascotas como si fueran de la familia</div><br>
                      <a href="#section2" class="btn bg-gradient-primary-to-secondary text-white" id="learn-more">Saber más</a>
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
                        <img class="position-relative" src="images/foto2.png" alt=""width="50%">
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
              <div class="h2 fs-1 text-white mb-4"id="clinic-sencilla">"Una forma sencilla de gestionar las visitas y cuidar de tus compañeros peludos, ¡todo en una sola aplicación!"</div>
            </div>
        </div>
    </div>
</aside><!-- App features section-->
<section id="features">
  <div class="container px-5">
    <div class="row justify-content-center"> <!-- Quité gx-5 para centrar el contenido -->
      <div class="col-lg-4 col-md-6 mb-5"> <!-- Cambié col-md-6 por col-lg-4 -->
        <!-- Feature item: Calendario -->
        <x-nav-link :href="url('full-calender')" :active="request()->routeIs('full-calender')">
          <div class="text-center">
            <i class="bi-calendar icon-feature text-gradient d-block mb-3"></i>
            <h3 class="font-alt text-white" id="feature-calendar">Calendario</h3>
            <p class=" mb-0 text-white fs-5" id="calendar-description">Organiza citas y recordatorios importantes para tu mascota.</p>
          </div>
        </x-nav-link>
      </div>
      <div class="col-lg-4 col-md-6 mb-5"> <!-- Cambié col-md-6 por col-lg-4 -->
        <!-- Feature item: Historial Clínico -->
        <x-nav-link :href="route('usuarios.search')" :active="request()->routeIs('usuarios.search')">
          <div class="text-center">
            <i class="bi-file-earmark-medical icon-feature text-gradient d-block mb-3"></i>
            <h3 class="font-alt text-white" id="feature-medical">Historial Clínico</h3>
            <p class=" mb-0 text-white fs-5" id="medical-description">Mantén un registro detallado de las visitas al veterinario, tratamientos y más.</p>
          </div>
        </x-nav-link>
      </div>
      <div class="col-lg-4 col-md-6 mb-5"> <!-- Cambié col-md-6 por col-lg-4 -->
        <!-- Feature item: Free to Use -->
        <x-nav-link :href="url('quelepasa')" :active="request()->routeIs('quelepasa')">
          <div class="text-center">
            <i class="bi bi-heart icon-feature text-gradient d-block mb-3"></i>
            <h3 class="font-alt text-white" id="feature-question">¿Qué le pasa a tu Mascota?</h3>
            <p class=" mb-0 text-white fs-5" id="question-description">Pregunta a nuestros especialistas cualquier duda que te pueda surgir en el cuidado de tu mascota</p>
          </div>
        </x-nav-link>
      </div>
      <div class="col-lg-4 col-md-6 mb-5"> <!-- Cambié col-md-6 por col-lg-4 -->
        <!-- Feature item: Sobre Nosotros -->
        <x-nav-link :href="url('home')" :active="request()->routeIs('home')">
          <div class="text-center ">
            <i class="bi bi-house-door icon-feature text-gradient d-block mb-3"></i>
            <h3 class="font-alt text-white" id="feature-about">Sobre Nosotros</h3>
            <p class="text-white mb-0 fs-5" id="about-description">En la página principal podrás encontrar la información general de su funcionamiento</p>
          </div>
        </x-nav-link>
      </div>
    </div>
  </div>
</section>


        <!-- Basic features section-->
        <div id="section2" class="section">
        <section class="bg-gradient-primary-to-secondary">
          <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
              <div class="col-sm-8 col-md-6">
                <div class="px-5 px-sm-0">
                  <img class="img-fluid" src="images/foto1.png" alt="Imagen Sobre Nosotros" width="70%"/>
                </div>
              </div>
              <div class="col-12 col-lg-5">
                <h2 class="display-4 lh-1 mb-4 text-white" id="about-title">Sobre Nosotros</h2>
                <p class="text-white mb-5 fs-5" id="about-text">
                  En VetClinic, nos esforzamos por brindar un entorno amigable y eficiente para que los veterinarios puedan registrar y acceder fácilmente a la información de los pacientes, administrar citas, llevar un historial clínico completo, y proporcionar un seguimiento más preciso y personalizado del estado de salud de las mascotas.
                </p>
                <p class="text-white mb-5 fs-5" id="about-text2">
                  Con VetClinic, esperamos contribuir al bienestar y cuidado de todas las mascotas, ofreciendo a los profesionales veterinarios las herramientas necesarias para un servicio de calidad y a los dueños de mascotas la tranquilidad de contar con un equipo comprometido con la salud y felicidad de sus compañeros peludos.
                </p>
              </div>
            </div>
          </div>
        </section>
        </div>

 <!-- Call to Action--><!-- Call to Action-->
 <section class="call-to-action text-white text-center" id="contact">
  <div class="container position-relative">
      <div class="row justify-content-center">
          <div class="col-xl-6">
            <h2 class="mb-4" id="contact-title">¿Has tenido algún problema? </h2>
            <h2 id="contact-title2">Introduce tu correo electrónico y nos pondremos en contacto</h2>
            <br>
              <!-- Contact form-->
              <form class="form-subscribe" id="contactFormFooter" method="POST" action="{{ route('contact.store') }}">
                  @csrf
                  <!-- Email address input-->
                  <div class="row">
                      <div class="col">
                          <input class="form-control form-control-lg" name="email" id="emailAddressBelow" type="email" placeholder="Correo electrónico" required />
                      </div>
                      <div class="col-auto"><button class="btn bg-gradient-primary-to-secondary text-white btn-lg" type="submit" id="send-button">Enviar</button></div>
                  </div>
                  <!-- Submit success message-->
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">¡Correo electrónico enviado con éxito!</div>
                        <p>Nos pondremos en contacto contigo pronto.</p>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">¡Error al enviar el correo electrónico!</div></div>
              </form>
          </div>
      </div>
  </div>
</section>
</x-app-layout>
@include('registro.footer')
<script>
  function translatePage(language) {
    const translations = {
      en: {
        "clinic-title": "Welcome to the Veterinary Clinic",
        "clinic-description": "Caring for your pets as if they were family",
        "learn-more": "Learn more",
        "clinic-sencilla": "A simple way to manage visits and take care of your furry companions, all in one app!",
        "feature-calendar": "Calendar",
        "calendar-description": "Organize appointments and important reminders for your pet.",
        "feature-medical": "Medical History",
        "medical-description": "Keep a detailed record of vet visits, treatments, and more.",
        "feature-question": "What's Wrong with Your Pet?",
        "question-description": "Ask our specialists any questions that may arise in caring for your pet.",
        "feature-about": "About Us",
        "about-description": "On the main page you can find general information about its operation.",
        "about-title": "About Us",
        "about-text": "At VetClinic, we strive to provide a friendly and efficient environment for veterinarians to easily record and access patient information, manage appointments, maintain a complete medical history, and provide more accurate and personalized monitoring of pets' health status. ",
        "about-text2":"With VetClinic, we hope to contribute to the well-being and care of all pets, offering veterinarians the necessary tools for quality service and pet owners the peace of mind of having a team committed to the health and happiness of their furry companions.",
        "contact-title": "Have you had any problems?",
        "contact-title2": "Enter your email and we will contact you.",
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
        "clinic-title": "Bienvenido a la Clínica Veterinaria",
        "clinic-description": "Cuidando de tus mascotas como si fueran de la familia",
        "learn-more": "Saber más",
        "clinic-sencilla": "Una forma sencilla de gestionar las visitas y cuidar de tus compañeros peludos, ¡todo en una sola aplicación!",
        "feature-calendar": "Calendario",
        "calendar-description": "Organiza citas y recordatorios importantes para tu mascota.",
        "feature-medical": "Historial Clínico",
        "medical-description": "Mantén un registro detallado de las visitas al veterinario, tratamientos y más.",
        "feature-question": "¿Qué le pasa a tu Mascota?",
        "question-description": "Pregunta a nuestros especialistas cualquier duda que te pueda surgir en el cuidado de tu mascota.",
        "feature-about": "Sobre Nosotros",
        "about-description": "En la página principal podrás encontrar la información general de su funcionamiento.",
        "about-title": "Sobre Nosotros",
        "about-text": "En VetClinic, nos esforzamos por brindar un entorno amigable y eficiente para que los veterinarios puedan registrar y acceder fácilmente a la información de los pacientes, administrar citas, llevar un historial clínico completo, y proporcionar un seguimiento más preciso y personalizado del estado de salud de las mascotas.",
        "about-text2":"Con VetClinic, esperamos contribuir al bienestar y cuidado de todas las mascotas, ofreciendo a los profesionales veterinarios las herramientas necesarias para un servicio de calidad y a los dueños de mascotas la tranquilidad de contar con un equipo comprometido con la salud y felicidad de sus compañeros peludos.",
        "contact-title": "¿Has tenido algún problema?",
        "contact-title2": "Introduce tu correo electrónico y nos pondremos en contacto.",
        "footer-copyright": "© 2024 Vet Clinic. Todos los derechos reservados.",
                "footer-contact": "CONTACTE CON NOSOTROS",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com",
                "Inicio":"{{ __('INICIO') }}",
                "Calendario":"{{ __('CALENDARIO') }}",
                "Historial":"{{ __('HISTORIAL') }}",
                "Consultas":"{{ __('CONSULTAS') }}",
                "Gestion":"{{ __('GESTION DE EMPLEADOS') }}",
                "Soporte":"{{ __('SOPORTE') }}",
                "Quelepasa":"{{ __('¿QUE LE PASA A MI MASCOTA') }}",
                "idioma":"Idioma",
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


