<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <span id="page-title">Información de la mascota</span>
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
            <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

          </head>
        <div class="container px-5">
            <br>
            <!-- Selector de mascotas -->
            <div class="mb-5">
                <form action="{{ route('usuarios.seleccionar-mascota', ['usuario' => $usuario]) }}" method="POST" id="formSeleccionarMascota">
                    @csrf
                    <label for="mascota"><span id="select-pet">Seleccionar Mascota:</span></label>
                    <select name="mascota_id" id="mascota" class="text-black" onchange="this.form.submit()">
                        @foreach($mascotas as $m)
                            <option value="{{ $m->id }}" @if($m->id == $mascota->id) selected @endif>{{ $m->nombre }}</option>
                        @endforeach
                    </select>
                </form>
            </div>

            <!-- Información de la mascota seleccionada -->
            <div class="row gx-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <div class="card shadow border-0 rounded-4 bg-gradient-primary-to-secondary">
                        <div class="card-body p-5">
                            <h2 class="text-white fw-bolder mb-4"><span id="pet-info">Información de la Mascota</span></h2>
                            <table class="table">
                                <tbody>
                                    <tr class="text-white">
                                        <th scope="row"><span id="name">Nombre</span></th>
                                        <td>{{ $mascota->nombre }}</td>
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row"><span id="age">Edad</span></th>
                                        <td>{{ $mascota->edad }}</td>
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row"><span id="type">Tipo</span></th>
                                        <td>{{ $mascota->tipo }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    @if(auth()->user()->hasRole('employee'))
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-white fw-bolder mb-0"><span id="history">Historial</span></h2>
                        <button id="mostrarFormulario" class="btn bg-gradient-primary-to-secondary text-white px-4 py-3">
                            <span id="add-appointment">{{ __('Agregar Cita') }}</span>
                        </button>
                    </div>
                    @endif
                    <div id="formularioCita" class="hidden p-6 bg-gray-800 dark:bg-gray-700 border-b border-gray-600 dark:border-gray-600">
                        <section class="py-5">
                            <div class="container px-5">
                                <!-- Contact form-->
                                <div class="rounded-4 py-5 px-4 px-md-5">
                                    <div class="text-center mb-5">
                                        <h1 class="fw-bolder"><span id="addd-appointment">Agregar cita</span></h1>
                                        <p class="lead fw-normal text-muted mb-0"><span id="explain-reason">Explica detenidamente el motivo de la Cita</span></p>
                                    </div>

                                    <h3 class="text-lg font-semibold mb-4 text-white" id="adddd-appointment">{{ __('Agregar Cita') }}</h3>

                                    <form action="{{ route('citas.store') }}" method="POST">
                                        @csrf

                                        <div class="mb-4">
                                            <label for="fecha" class="block text-sm font-medium text-gray-300" id="date">{{ __('Fecha de la Cita:') }}</label>
                                            <input type="date" name="fecha" id="fecha" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 text-black" required>
                                            @error('fecha')
                                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="motivo" class="block text-sm font-medium text-gray-300">{{ __('Motivo de la Cita:') }}</label>
                                            <textarea name="motivo" id="motivo" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 text-black" required></textarea>
                                            @error('motivo')
                                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="diagnostico" class="block text-sm font-medium text-gray-300">{{ __('Diagnóstico:') }}</label>
                                            <textarea name="diagnostico" id="diagnostico" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 text-black" required></textarea>
                                            @error('diagnostico')
                                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="tratamiento" class="block text-sm font-medium text-gray-300">{{ __('Tratamiento:') }}</label>
                                            <textarea name="tratamiento" id="tratamiento" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 text-black" required></textarea>
                                            @error('tratamiento')
                                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Campo oculto para el ID de la mascota -->
                                        <input type="hidden" name="mascota_id" value="{{ $mascota->id }}">

                                        <div>
                                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-nonefocus:border-indigo-700 focus:ring focus:ring-indigo-300 transition">
                                                <span id="save-appointment">{{ __('Guardar Cita') }}</span>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Experience Cards for Citas-->
                    @foreach($citas as $cita)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class=" p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">{{ $cita->fecha }}</div>
                                            <div class="small text-black"><span id="pet-name">Nombre de la mascota:</span> {{ $cita->mascota->nombre }}</div>
                                            <div class="small text-muted"><span id="pet-type">Tipo de mascota:</span> {{ $cita->mascota->tipo }}</div>
                                            <div class="small text-muted"><span id="appointment-reason">Motivo de la Cita:</span> {{ $cita->motivo }}</div>
                                            <div class="small text-muted"><span id="diagnosis">Diagnóstico:</span> {{ $cita->diagnostico }}</div>
                                            <div class="small text-muted"><span id="treatment">Tratamiento:</span> {{ $cita->tratamiento }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>

    <!-- Incluye el footer -->
    @include('registro.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Función para mostrar el formulario de agregar cita
            document.getElementById('mostrarFormulario').addEventListener('click', function() {
                document.getElementById('formularioCita').classList.remove('hidden');
            });
        });

        function translatePage(language) {
          const translations = {
            en: {
              'page-title': 'Pet Information',
              'select-pet': 'Select Pet:',
              'pet-info': 'Pet Information',
              'name': 'Name',
              'age': 'Age',
              'type': 'Type',
              'history': 'History',
              'add-appointment': 'Add Appointment',
              'addd-appointment': 'Add Appointment',
              'adddd-appointment': 'Add Appointment',
              'explain-reason': 'Explain the reason for the appointment',
              'save-appointment': 'Save Appointment',
              'pet-name': 'Pet Name:',
              'pet-type': 'Pet Type:',
              'appointment-reason': 'Appointment Reason:',
              'diagnosis': 'Diagnosis:',
              'treatment': 'Treatment:'
            },
            es: {
              'page-title': 'Información de la mascota',
              'select-pet': 'Seleccionar Mascota:',
              'pet-info': 'Información de la Mascota',
              'name': 'Nombre',
              'age': 'Edad',
              'type': 'Tipo',
              'history': 'Historial',
              'add-appointment': 'Agregar Cita',
              'addd-appointment': 'Agregar Cita',
              'adddd-appointment': 'Add Appointment',
              'explain-reason': 'Explica detenidamente el motivo de la Cita',
              'save-appointment': 'Guardar Cita',
              'pet-name': 'Nombre de la mascota:',
              'pet-type': 'Tipo de mascota:',
              'appointment-reason': 'Motivo de la Cita:',
              'diagnosis': 'Diagnóstico:',
              'treatment': 'Tratamiento:'
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
</x-app-layout>

