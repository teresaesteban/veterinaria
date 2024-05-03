<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

        // Obtiene la mascota asociada al usuario autenticado
        $mascota = Auth::user()->mascota;

        // Crea una nueva cita
        $cita = new Cita();
        $cita->fecha = $request->fecha;
        $cita->motivo = $request->motivo;
        $cita->diagnostico = $request->diagnostico;
        $cita->tratamiento = $request->tratamiento;

        // Asocia la cita con la mascota
        $cita->mascota()->associate($mascota);

        // Guarda la cita en la base de datos
        $cita->save();

        return redirect()->back()->with('success', 'Cita agregada exitosamente.');
    }
}
