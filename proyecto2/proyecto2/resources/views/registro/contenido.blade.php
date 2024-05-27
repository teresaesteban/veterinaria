<link href="css/styles.css" rel="stylesheet" />
<div class="black">
    <div class="content">
        <div class="container">
            <div class="content-text">
                <p class="titulo" id="clinic-title">CUIDA A TUS MASCOTAS CON NOSOTROS</p>
                <p class="text-white" id="clinic-subtitle">Mejorando vidas, Aquí mismo</p>
                <button class="btn bg-gradient-primary-to-secondary text-white">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Inicio</a>
                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white"
                                        id="register">Registrar</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </button>
            </div>
        </div>
        <img src="{{ asset('images/portada.png') }}"
            alt="Veterinary Physician Preparing Hypodermic Needle Injection Sedative for Cat" class="content-image">

    </div>

</div>
<script>
    function translatePage(language) {
        const translations = {
            en: {
                "home": "Home",
                "login": "Login",
                "clinic-title": "CARE FOR YOUR PETS WITH US",
                "clinic-subtitle": "Better lives, here",
                "register": "Register",
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
                "home": "Inicio",
                "login": "Iniciar sesión",
                "clinic-title": "CUIDA A TUS MASCOTAS CON NOSOTROS",
                "clinic-subtitle": "Mejorando vidas, Aquí mismo",
                "register": "Registrarse",
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
