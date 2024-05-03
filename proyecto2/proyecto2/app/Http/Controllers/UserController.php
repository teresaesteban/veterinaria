<?php
// UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Lógica de búsqueda
        $usuarios = User::where('name', 'like', '%'.$searchTerm.'%')
                        ->orWhere('email', 'like', '%'.$searchTerm.'%')
                        ->get();

        // Pasar los usuarios encontrados a la vista
        return view('historial', ['usuarios' => $usuarios]);
    }

    public function agregarMascota(User $usuario)
    {
        // Aquí puedes implementar la lógica para agregar una mascota al usuario
        // Por ahora, simplemente pasaremos a una vista para mostrar que la mascota ha sido agregada
        return view('mascota.agregada', ['usuario' => $usuario]);
    }
}
