<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
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
