<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('GESTION DE EMPLEADOS') }}
        </h2>
    </x-slot>
    <!-- Formulario para crear un nuevo empleado -->
    <div class="container mt-4">
        <form action="{{ route('employees.create') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="col-md-4">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
            </div>
            <div class="col-md-4">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Empleado</button>
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
                        <button type="submit" class="btn btn-danger">Eliminar</button>
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
    <BR>
</x-app-layout>
@include('registro.footer')
