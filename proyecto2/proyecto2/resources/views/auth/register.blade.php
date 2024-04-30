<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- User Type -->
        <div class="mt-4">
            <x-input-label for="user_type" :value="__('user_type')" />
            <select id="user_type" name="user_type" class="block mt-1 w-full" onchange="togglePetFields(this)">
                <option value="normal">Normal User</option>
                <option value="veterinarian">Veterinarian</option>
            </select>
        </div>

        <!-- Pet Information -->
        <div id="pet_fields" style="display: none;">
            <div class="mt-4">
                <x-input-label for="pet_type" :value="__('pet_type')" />
                <select id="pet_type" name="pet_type" class="block mt-1 w-full">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="bird">Bird</option>
                    <option value="fish">Fish</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="mt-4">
                <x-input-label for="pet_name" :value="__('pet_name')" />
                <x-text-input id="pet_name" class="block mt-1 w-full" type="text" name="pet_name" :value="old('pet_name')" autocomplete="pet_name" />
                <x-input-error :messages="$errors->get('pet_name')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="pet_age" :value="__('pet_age')" />
                <x-text-input id="pet_age" class="block mt-1 w-full" type="number" name="pet_age" :value="old('pet_age')" autocomplete="pet_age" />
                <x-input-error :messages="$errors->get('pet_age')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="pet_sex" :value="__('pet_sex')" />
                <select id="pet_sex" name="pet_sex" class="block mt-1 w-full">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function togglePetFields(select) {
            var petFields = document.getElementById("pet_fields");
            if (select.value === "normal") { // Solo si el usuario es normal
                petFields.style.display = "block";
            } else {
                petFields.style.display = "none";
            }
        }
        // Mostrar campos de mascota al cargar si es usuario normal
        togglePetFields(document.getElementById('user_type'));
    </script>
</x-guest-layout>
