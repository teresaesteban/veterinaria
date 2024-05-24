<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('home') }}">
                        <img src="{{ asset('images/unnamed-removebg-preview (2).png') }}" alt="Logo"
                            class="navbar-logo" style="max-height: 70px;">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" >
                    <x-nav-link :href="url('home')" :active="request()->routeIs('home')"    id="Inicio">
                        {{ __('INICIO') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('full-calender.index')" :active="request()->routeIs('full-calender.index')" id="Calendario">
                        {{ __('CALENDARIO') }}
                    </x-nav-link>

                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('usuarios.search')" :active="request()->routeIs('usuarios.search')" id="Historial">
                        {{ __('HISTORIAL CLÍNICO') }}
                    </x-nav-link>
                </div>
                @role('employee')

                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('mostrar-consultas')" :active="request()->routeIs('mostrar-consultas')" id="Consultas">
                            {{ __('CONSULTAS') }}
                        </x-nav-link>
                        <div class="notification">
                            <a href="route('mostrar-consultas')" class="text-white"></a>
                            <span id="unread-count" class="badge" style="display: none;">0</span>
                        </div>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('employees.index')" :active="request()->routeIs('employees.index')" id="Gestion">
                            {{ __('GESTIÓN DE EMPLEADOS') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('admin.emails')" :active="request()->routeIs('admin.emails')" id="Soporte">
                            {{ __('SOPORTE') }}
                        </x-nav-link>
                    </div>
                @endrole


                @if(!Auth::user()->hasRole('employee'))
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="url('quelepasa')" :active="request()->routeIs('quelepasa')" id="QueLePasa">
                            {{ __('¿QUÉ LE PASA A MI MASCOTA?') }}
                        </x-nav-link>
                    </div>
                    <div class="notification">
                        <span id="respuestas-count" class="badge">0</span>
                    </div>

                @endif
            </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="dropdown">
                    <button id="idioma" class="btn bg-gradient-primary-to-secondary dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" >
                        Idioma
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#" onclick="translatePage('es')">ES</a></li>
                        <li><a class="dropdown-item" href="#" onclick="translatePage('en')">EN</a></li>
                    </ul>
                </div>
                <br>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    Usuario no autenticado
                                @endauth
                            </div>


                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="url('full-calender')" :active="request()->routeIs('full-calender')">
                {{ __('Calendario') }}
            </x-responsive-nav-link>
            <x-responsive-nav-Link :href="route('usuarios.search')" :active="request()->routeIs('usuarios.search')">
                {{ __('Historial Clínico') }}
            </x-responsive-nav-Link>
            @role('employee')
            <x-responsive-nav-link :href="route('mostrar-consultas')" :active="request()->routeIs('mostrar-consultas')">
                {{ __('Consultas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-Link :href="route('employees.index')" :active="request()->routeIs('employees.index')">
                {{ __('Gestión de Empleados') }}
            </x-responsive-nav-Link>
            @endrole
            @if(!Auth::user()->hasRole('employee'))
            <x-responsive-nav-Link :href="url('quelepasa')" :active="request()->routeIs('quelepasa')">
                {{ __('¿Qué le pasa a mi mascota?') }}
            </x-responsive-nav-Link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                    @auth
                        {{ Auth::user()->name }}
                    @else
                        Usuario no autenticado
                    @endauth
                </div>
                <div class="font-medium text-sm text-gray-500">
                    @auth
                        {{ Auth::user()->email }}
                    @endauth
                </div>

            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch("{{ route('check.respuestas.count') }}")
            .then(response => response.json())
            .then(data => {
                const respuestasCountContainer = document.getElementById("respuestas-count-container");
                const respuestasCount = document.getElementById("respuestas-count");
                respuestasCount.textContent = data.respuestasCount;

                if (data.respuestasCount > 0) {
                    respuestasCountContainer.style.display = "block";
                } else {
                    respuestasCountContainer.style.display = "none";
                }
            });
    });
</script>
<script>
    function checkNewMessages() {
        fetch('{{ route('check.new.messages') }}')
            .then(response => response.json())
            .then(data => {
                const unreadCountElement = document.getElementById('unread-count');
                if (data.newMessages > 0) {
                    unreadCountElement.textContent = data.newMessages;
                    unreadCountElement.style.display = 'inline-block';
                } else {
                    unreadCountElement.style.display = 'none';
                }
            })
            .catch(error => console.error('Error:', error));
    }

    // Verificar nuevos mensajes cada 30 segundos
    setInterval(checkNewMessages, 30000);

    // Opcionalmente, verificar inmediatamente cuando la página se carga
    checkNewMessages();
  </script>
