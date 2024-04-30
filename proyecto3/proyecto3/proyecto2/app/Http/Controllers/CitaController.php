<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Mascota;

class CitaController extends Controller
{public function index(Request $request)
    {
        // Obtener todas las mascotas para el formulario de selección
        $mascotas = Mascota::all();

        // Si hay una mascota seleccionada, obtener sus citas
        if ($request->has('mascota_id')) {
            $mascota_id = $request->input('mascota_id');
            $mascota = Mascota::findOrFail($mascota_id);
            $citas = $mascota->citas;
        } else {
            // Si no hay una mascota seleccionada, mostrar todas las citas
            $citas = Cita::all();
        }

        // Pasar las mascotas y las citas a la vista
        return view('historial', compact('citas', 'mascotas'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'motivo' => 'required|string',
            'diagnostico' => 'required|string',
            'tratamiento' => 'required|string',
        ]);

        $cita = new Cita();
        $cita->fecha = $request->fecha;
        $cita->motivo = $request->motivo;
        $cita->diagnostico = $request->diagnostico;
        $cita->tratamiento = $request->tratamiento;
        $cita->save();

        return redirect()->back()->with('success', 'Cita agregada exitosamente.');
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'fecha_modificar' => 'required|date',
            'motivo_modificar' => 'required|string',
            'diagnostico_modificar' => 'required|string',
            'tratamiento_modificar' => 'required|string',
        ]);

        $cita->fecha = $request->fecha_modificar;
        $cita->motivo = $request->motivo_modificar;
        $cita->diagnostico = $request->diagnostico_modificar;
        $cita->tratamiento = $request->tratamiento_modificar;
        $cita->save();

        // Cambia 'ruta.donde.redirigir.despues.de.actualizar' por la ruta que deseas
        return redirect()->back()->with('citaModificada', '¡Cita modificada correctamente!');
    }
}
