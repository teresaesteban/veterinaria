<link href="css/styles.css" rel="stylesheet" /><div class="black"><div class="content">
    <div class="container">
        <div class="content-text">
            <p class="titulo" id="clinic-title">CUIDA A TUS MASCOTAS CON NOSOTROS</p>
            <p class="text-white" id="clinic-subtitle">Mejorando vidas, Aquí mismo</p>
            <button class="btn bg-gradient-primary-to-secondary text-white">  @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Inicio</a>
                    @else
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white" id="register">Registrar</a>
                    @endif
                    @endauth
                </div>
            @endif</button>
        </div>
    </div>
    <img src="{{ asset('images/portada.png') }}" alt="Veterinary Physician Preparing Hypodermic Needle Injection Sedative for Cat" class="content-image">

</div>

</div>
<script>
    function translatePage(language) {
      const translations = {
        en: {
"clinic-title": "CARE FOR YOUR PETS WITH US",
"clinic-subtitle": "Better lives, here",
"register": "Register"
        },
        es: {
"clinic-title": "CUIDA A TUS MASCOTAS CON NOSOTROS",
"clinic-subtitle": "Mejorando vidas, Aquí mismo",
"register": "Registrarse"
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
