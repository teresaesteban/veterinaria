<link href="css/styles.css" rel="stylesheet" /><section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
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
            'Saved': 'Saved.'
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
            'Saved': 'Guardado.'
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
