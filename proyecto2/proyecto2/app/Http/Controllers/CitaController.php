<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita; // Asegúrate de importar el modelo Cita

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
        // Ajusta esta parte si necesitas asociar la cita con una mascota o un usuario
        $cita->save();

        return redirect()->back()->with('success', 'Cita agregada exitosamente.');
    }
}
