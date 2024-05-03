<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\Redirect;
class MascotaController extends Controller
{
   // MascotaController.php

public function guardar(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'tipo' => 'required|string|max:255',
        'edad' => 'required|integer|min:0',
        'usuario_id' => 'required|exists:users,id' // Verifica que el ID de usuario exista en la tabla de usuarios
    ]);

    // Crear una nueva mascota con los datos del formulario
    Mascota::create([
        'nombre' => $request->nombre,
        'tipo' => $request->tipo,
        'edad' => $request->edad,
        'usuario_id' => $request->usuario_id
    ]);

    // Redirigir a la página de historial con un mensaje de éxito
    return Redirect::route('usuarios.search')->with('success', 'Mascota agregada correctamente.');
}
public function show($usuario)
{
    // Buscar la mascota relacionada con el usuario
    $mascota = Mascota::where('usuario_id', $usuario)->first();

    // Verificar si se encontró la mascota
    if ($mascota) {
        // Obtener todas las citas asociadas a esta mascota
        $citas = $mascota->citas;
        // Pasar la mascota y las citas a la vista
        return view('mascota.show', compact('mascota', 'citas'));
    } else {
        // Si no se encuentra la mascota, redirigir o mostrar un mensaje de error
        // Por ejemplo:
        return redirect()->route('pagina_de_error');
        // O
        // return view('error');
    }
}


}
