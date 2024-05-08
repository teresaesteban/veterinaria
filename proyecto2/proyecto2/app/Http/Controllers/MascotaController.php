<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\Redirect;

class MascotaController extends Controller
{
    public function seleccionarMascota(Request $request, $usuario)
    {
        // Obtener el ID de la mascota seleccionada desde el formulario
        $mascotaId = $request->input('mascota_id');

        // Buscar la mascota seleccionada
        $mascota = Mascota::find($mascotaId);

        // Verificar si se encontró la mascota
        if ($mascota) {
            // Obtener todas las citas asociadas a esta mascota
            $citas = $mascota->citas;
            // Obtener todas las mascotas del usuario para el selector
            $mascotas = Mascota::where('usuario_id', $usuario)->get();
            // Pasar la mascota, las citas y las mascotas a la vista
            return view('mascota.show', compact('mascota', 'citas', 'mascotas', 'usuario'));
        } else {
            // Si no se encuentra la mascota, redirigir o mostrar un mensaje de error
            // Por ejemplo:
            return redirect()->route('usuarios.agregar-mascota', ['usuario' => $usuario]);
            // O
            // return view('error');
        }
    }


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
        return redirect()->route('usuarios.search')->with('success', 'Mascota agregada correctamente.');
    }

    public function show($usuario)
    {
        // Buscar la mascota relacionada con el usuario
        $mascota = Mascota::where('usuario_id', $usuario)->first();

        // Verificar si se encontró la mascota
        if ($mascota) {
            // Obtener todas las citas asociadas a esta mascota
            $citas = $mascota->citas;
            // Obtener todas las mascotas del usuario para el selector
            $mascotas = Mascota::where('usuario_id', $usuario)->get();
            // Pasar la mascota, las citas y las mascotas a la vista
            return view('mascota.show', compact('mascota', 'citas', 'mascotas', 'usuario'));
        } else {
            // Si no se encuentra la mascota, redirigir o mostrar un mensaje de error
            // Por ejemplo:
            return redirect()->route('usuarios.agregar-mascota', ['usuario' => $usuario]);
            // O
            // return view('error');
        }
    }


}
