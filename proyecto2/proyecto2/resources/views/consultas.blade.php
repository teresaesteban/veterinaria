<x-app-layout>
    <x-slot name="header">
        <h2 id="header-title" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            CONSULTAS
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
    <div class="py-12 bg-dark min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="content-section-heading text-center">
                        <h3 id="subheader-title" class="text-muted mb-0 fs-5">Últimas preguntas</h3>
                        <h2 id="header-main-title" class="mb-5 text-white fs-1">Listado consultas</h2>
                    </div>
                    <div class="notification">
                        <a href="/consultas" class="text-white"></a>
                        <span id="unread-count" class="badge" style="display: none;">0</span>
                    </div>
                    @foreach ($consultas as $consulta)
                    <div class="w-full mb-8 rounded-lg p-6 shadow-md bg-custom-blue text-white">
                        <p class="mb-2"><strong id="pet-name-label">Nombre del usuario:</strong>{{ $consulta->user->name }}</p>
                        <p class="mb-2"><strong id="pet-name-label">Nombre de la mascota:</strong> {{ $consulta->nombre }}</p>
                        <p class="mb-2"><strong id="species-label">Especie:</strong> {{ $consulta->especie }}</p>
                        <p class="mb-2"><strong id="age-label">Edad:</strong> {{ $consulta->edad }}</p>
                        <p class="mb-2"><strong id="symptoms-label">Síntomas:</strong> {{ $consulta->sintomas }}</p>
                        <p class="mb-2"><strong id="additional-comments-label">Comentarios adicionales:</strong> {{ $consulta->comentarios }}</p>
                        @if (!empty($consulta->imagen))
    <p class="mb-2">
        <strong id="imagen">
            <img src="{{ url('images/veterinaria/' . $consulta->imagen) }}" alt="Imagen de la consulta">
        </strong>
    </p>
@endif
                        @if ($consulta->respuesta)
                        <p class="mb-2"><strong id="response-label">Respuesta:</strong> {{ $consulta->respuesta }}</p>
                        @endif
                        <form action="{{ route('consultas.destroy', $consulta->id) }}" method="POST" class="text-right">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none" id="delete-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </form>
                        @if(auth()->user()->hasRole('employee'))
                        <form action="{{ route('responder.consulta', $consulta->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="consulta_id" value="{{ $consulta->id }}">
                            <div class="form-group">
                                <label for="respuesta" id="response-label">Respuesta:</label>
                                <textarea class="form-control" id="response-placeholder" name="respuesta" rows="3">{{ auth()->user()->name }}:</textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn bg-white text-black" id="send-response-btn">Enviar Respuesta</button>
                        </form>
                        @endif
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('registro.footer')

    <!-- JavaScript para cambio de idioma -->
    <script>
        function translatePage(language) {
            const translations = {
                'es': {
                    'header-title': 'CONSULTAS',
                    'subheader-title': 'Últimas preguntas',
                    'header-main-title': 'Listado consultas',
                    'pet-name-label': 'Nombre de la mascota:',
                    'species-label': 'Especie:',
                    'age-label': 'Edad:',
                    'symptoms-label': 'Síntomas:',
                    'additional-comments-label': 'Comentarios adicionales:',
                    'response-label': 'Respuesta:',
                    'response-placeholder': 'Escribe tu respuesta aquí...',
                    'send-response-btn': 'Enviar Respuesta'
                },
                'en': {
                    'header-title': 'INQUIRIES',
                    'subheader-title': 'Latest Questions',
                    'header-main-title': 'Inquiry List',
                    'pet-name-label': 'Pet Name:',
                    'species-label': 'Species:',
                    'age-label': 'Age:',
                    'symptoms-label': 'Symptoms:',
                    'additional-comments-label': 'Additional Comments:',
                    'response-label': 'Response:',
                    'response-placeholder': 'Write your response here...',
                    'send-response-btn': 'Send Response'
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
