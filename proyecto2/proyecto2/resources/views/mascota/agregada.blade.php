<!-- resources/views/mascota/agregada.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <span id="page-title">{{ __('Mascota Agregada') }}</span>
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
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
            rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
            rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    </head>
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <div class="rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="text-center">
                        <i class="bi bi-heart icon-feature text-gradient d-block mb-3"></i>
                    </div>
                    <h1 class="fw-bolder"><span id="create-pet">Agrega los datos de tu mascota!
                        </span></h1>
                    <p class="lead fw-normal text-muted mb-0"><span id="thanks">Gracias por confiar en
                            nosotros</span></p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="{{ route('mascota.guardar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
                            <div class="mt-4">
                                <label for="nombre"><span id="pet-name">Nombre de la mascota:</span></label>
                                <input type="text" name="nombre" id="nombre"
                                    class="form-input block w-full mt-1 text-black" required>
                            </div>
                            <div class="mt-4">
                                <label for="tipo"><span id="pet-type">Tipo de mascota:</span></label>
                                <input type="text" name="tipo" id="tipo"
                                    class="form-input block w-full mt-1 text-black" required>
                            </div>
                            <div class="mt-4">
                                <label for="edad"><span id="pet-age">Edad de la mascota:</span></label>
                                <input type="number" name="edad" id="edad"
                                    class="form-input block w-full mt-1 text-black" required>
                            </div>
                            <div class="mt-4">
                                <button type="submit"
                                    class="bg-gradient-primary-to-secondary hover:bg-gray-800 text-white font-bold py-2 px-4 rounded"><span
                                        id="save-pet">Guardar Mascota</span></button>
                            </div>
                        </form>
                    </div>
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
                'page-title': 'Added Pet',
                'create-pet': 'Add your pet data',
                'thanks': 'Thank you for trusting us',
                'pet-name': 'Pet Name:',
                'pet-type': 'Pet Type:',
                'pet-age': 'Pet Age:',
                'save-pet': 'Save Pet',
                "footer-copyright": "© 2024 Vet Clinic. All rights reserved.",
                "footer-contact": "CONTACT US",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com",
                "Inicio": "{{ __('HOME') }}",
                "Calendario": "{{ __('CALENDAR') }}",
                "Historial": "{{ __('HISTORY') }}",
                "Consultas": "{{ __('CONSULTS') }}",
                "Gestion": "{{ __('EMPLOYEES') }}",
                "Soporte": "{{ __('SUPPORT') }}",
                "Quelepasa": "{{ __('WHAT´S WRONG WITH MY PET') }}",
                "idioma": "Language",
            },
            es: {
                'page-title': 'Mascota Agregada',
                'create-pet': 'Agrega los datos de tu mascota!',
                'thanks': 'Gracias por confiar en nosotros',
                'pet-name': 'Nombre de la mascota:',
                'pet-type': 'Tipo de mascota:',
                'pet-age': 'Edad de la mascota:',
                'save-pet': 'Guardar Mascota',
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
