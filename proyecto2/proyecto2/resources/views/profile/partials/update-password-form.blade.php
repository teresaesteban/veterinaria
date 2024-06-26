<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100" id="update2">
            {{ __('Actualizar contraseña') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400" id="secure">
            {{ __('Asegúrate de que tu cuenta esté usando una contraseña larga y aleatoria para mantenerla segura.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label id="update3" :value="__('Contraseña actual')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full text-black" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label id="update4" :value="__('Nueva contraseña')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full text-black" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label id="update5" :value="__('Confirmar contraseña')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full text-black" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4" id="guardar">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
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

