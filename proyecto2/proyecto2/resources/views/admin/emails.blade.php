<x-app-layout>
    <x-slot name="header">
        <h2 id="header-title" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            HISTORIAL
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
        <body>
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">

                        <div class="text-uppercase">{{ auth()->user()->name }}</div>
                        <div class="fs-3 fw-light text-muted" id="instruction-text">Para ver los correos electrónicos de asistencia técnica, revisa la tabla a continuación.</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="text-white d-inline" id="welcome-text">¡Bienvenido al Historial de Asistencia Técnica!</span></h1>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow">
                            <div class="card-header bg-gradient-primary-to-secondary py-3">
                                <h6 class="m-0 font-weight-bold text-white" id="table-header">Emails de Asistencia Técnica</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="bg-dark text-white">
                                                <th>ID</th>
                                                <th id="email-column">Correo Electrónico</th>
                                                <th id="date-column">Fecha de Envío</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($emails as $email)
                                            <tr>
                                                <td>{{ $email->id }}</td>
                                                <td>{{ $email->email }}</td>
                                                <td>{{ $email->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            @include('registro.footer')

            <script>
                 function translatePage(language) {
                const translations = {
                    'es': {
                        'header-title': 'HISTORIAL',
                        'instruction-text': 'Para ver los correos electrónicos de asistencia técnica, revisa la tabla a continuación.',
                        'welcome-text': '¡Bienvenido al Historial de Asistencia Técnica!',
                        'table-header': 'Emails de Asistencia Técnica',
                        'email-column': 'Correo Electrónico',
                        'date-column': 'Fecha de Envío',
                        "footer-copyright": "© 2024 Vet Clinic. Todos los derechos reservados.",
                "footer-contact": "CONTACTE CON NOSOTROS",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com"
                    },
                    'en': {
                        'header-title': 'HISTORY',
                        'instruction-text': 'To see the technical support emails, check the table below.',
                        'welcome-text': 'Welcome to the Technical Support History!',
                        'table-header': 'Technical Support Emails',
                        'email-column': 'Email Address',
                        'date-column': 'Date Sent',
                        "footer-copyright": "© 2024 Vet Clinic. All rights reserved.",
                "footer-contact": "CONTACT US",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com"
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
        </body>
    </html>
</x-app-layout>
