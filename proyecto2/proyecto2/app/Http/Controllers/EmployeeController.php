<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class EmployeeController extends Controller
{
    // Método para mostrar la página de gestión de empleados
    public function index()
    {
        $employees = User::role('employee')->get();
        // Aquí debes cargar la vista que muestra la interfaz de gestión de empleados
        return view('employees.index', compact('employees'));
    }

    // Método para crear un nuevo empleado
    public function create(Request $request)
    {
        // Verificar si el usuario actual tiene el rol 'employee'
        if ($request->user()->hasRole('employee')) {
            // Crear el nuevo usuario y asignarle el rol
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
            $user->assignRole(Role::where('name', 'employee')->first());

            return back()->with('success', 'Empleado creado exitosamente.');
        } else {
            return back()->with('error', 'No tienes permiso para crear empleados.');
        }
    }

    // Método para eliminar un empleado
    public function delete(Request $request, $userId)
    {
        // Verificar si el usuario actual tiene el rol 'employee'
        if ($request->user()->hasRole('employee')) {
            // Encontrar y eliminar el usuario si tiene el rol 'user'
            $user = User::where('id', $userId)->whereHas('roles', function ($query) {
                $query->where('name', 'employee');
            })->first();
            if ($user) {
                $user->delete();
                return back()->with('success', 'Empleado eliminado exitosamente.');
            } else {
                return back()->with('error', 'No se encontró el empleado a eliminar.');
            }
        } else {
            return back()->with('error', 'No tienes permiso para eliminar empleados.');
        }
    }
}
