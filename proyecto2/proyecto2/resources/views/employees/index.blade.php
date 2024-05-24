<x-app-layout>
    <x-slot name="header">
        <h2 id="header-title" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            GESTION DE EMPLEADOS
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
      <body>
        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <!-- Header text content -->
                    <div class="text-uppercase">{{ auth()->user()->name }}</div>
                    <div class="fs-3 fw-light text-muted" id="instruction-text">Para crear una nueva empleado, introduce sus datos. Para ver los empleados mira al fondo de la página</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-white d-inline" id="welcome-text">Bienvenido al gestor de empleados</span></h1>
                </div>
            </div>
        </header>

        <!-- Formulario para crear un nuevo empleado -->
        <div class="container mt-4">
            <form action="{{ route('employees.create') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" id="name-placeholder" placeholder="Nombre" required>
                </div>
                <div class="col-md-4">
                    <input type="email" name="email" class="form-control" id="email-placeholder" placeholder="Correo electrónico" required>
                </div>
                <div class="col-md-4">
                    <input type="password" name="password" class="form-control" id="password-placeholder" placeholder="Contraseña" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn bg-gradient-primary-to-secondary text-white" id="create-employee-btn">Crear Empleado</button>
                </div>
            </form>
        </div>
        <br>
        <!-- Lista de empleados existentes -->
        <div class="container mt-4">
            <ul class="list-group">
                @foreach($employees as $employee)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $employee->name }} - {{ $employee->email }}
                        <form action="{{ route('employees.delete', $employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="delete-btn">Eliminar</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Mostrar mensajes de éxito o error -->
        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <br>


@include('registro.footer')

        <!-- JavaScript para cambio de idioma -->
        <script>
             function translatePage(language) {
            const translations = {
                'es': {
                    'header-title': 'GESTION DE EMPLEADOS',
                    'instruction-text': 'Para crear una nueva empleado, introduce sus datos. Para ver los empleados mira al fondo de la página',
                    'welcome-text': 'Bienvenido al gestor de empleados',
                    'name-placeholder': 'Nombre',
                    'email-placeholder': 'Correo electrónico',
                    'password-placeholder': 'Contraseña',
                    'create-employee-btn': 'Crear Empleado',
                    'delete-btn': 'Eliminar',
                    "footer-copyright": "© 2024 Vet Clinic. Todos los derechos reservados.",
                "footer-contact": "CONTACTE CON NOSOTROS",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com"

                },
                'en': {
                    'header-title': 'EMPLOYEE MANAGEMENT',
                    'instruction-text': 'To create a new employee, enter their details. To see the employees, look at the bottom of the page',
                    'welcome-text': 'Welcome to the Employee Manager',
                    'name-placeholder': 'Name',
                    'email-placeholder': 'Email',
                    'password-placeholder': 'Password',
                    'create-employee-btn': 'Create Employee',
                    'delete-btn': 'Delete',
                    "footer-copyright": "© 2024 Vet Clinic. All rights reserved.",
                "footer-contact": "CONTACT US",
                "footer-address": "C. de Jarque de Moncayo, 10, 50012 Zaragoza",
                "footer-phone": "976 30 08 04",
                "footer-email": "teresaestegraci@gmail.com"

                }
            };

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
