<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100"id="Perfil de usuario">
            {{ __('Perfil de usuario') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400"id="Actualiza la información del perfil de tu cuenta y la dirección de correo electrónico.">
            {{ __("Actualiza la información del perfil de tu cuenta y la dirección de correo electrónico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label id="Name" for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full text-black" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label id="Email" for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full text-black" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200"ID="unverified">>
                        {{ __('Tu dirección de correo electrónico no está verificada.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"id="verification">
                            {{ __('Haz clic aquí para reenviar el correo de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400"id="address">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button id="Save">{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p  id="Saved"
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>
<script>
    function translatePage(language) {
      const translations = {
        en: {
            'Perfil de usuario': 'User Profile',
            'Actualiza la información del perfil de tu cuenta y la dirección de correo electrónico.': 'Update your account\'s profile information and email address.',
            'Name': 'Name',
            'Email': 'Email',
            'unverified': 'Your email address is unverified.',
            'verification': 'Click here to re-send the verification email.',
            'address': 'A new verification link has been sent to your email address.',
            'Save': 'Save',
            'Saved': 'Saved.',
            "footer-copyright": "© 2024 Vet Clinic. All rights reserved.",
                "footer-contact": "CONTACT US",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com"
        },
        es: {
            'Perfil de usuario': 'Perfil de usuario',
            'Actualiza la información del perfil de tu cuenta y la dirección de correo electrónico.': 'Actualiza la información del perfil de tu cuenta y la dirección de correo electrónico.',
            'Name': 'Nombre',
            'Email': 'Correo electrónico',
            'unverified': 'Tu dirección de correo electrónico no está verificada.',
            'verification': 'Haz clic aquí para reenviar el correo de verificación.',
            'address': 'Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.',
            'Save': 'Guardar',
            'Saved': 'Guardado.',
            "footer-copyright": "© 2024 Vet Clinic. Todos los derechos reservados.",
                "footer-contact": "CONTACTE CON NOSOTROS",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com"
                "update2": "Actualizar Contraseña",
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
