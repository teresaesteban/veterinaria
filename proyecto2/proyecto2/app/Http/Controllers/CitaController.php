<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date', // Validar que 'fecha' es requerido y debe ser una fecha
            'motivo' => 'required|string', // Validar que 'motivo' es requerido y debe ser una cadena de texto
            'diagnostico' => 'required|string', // Validar que 'diagnostico' es requerido y debe ser una cadena de texto
            'tratamiento' => 'required|string', // Validar que 'tratamiento' es requerido y debe ser una cadena de texto
            'mascota_id' => 'required|exists:mascotas,id', // Validar que 'mascota_id' es requerido y debe existir en la tabla 'mascotas'
        ]);

        // Crear una nueva instancia de Cita
        $cita = new Cita();
        $cita->fecha = $request->input('fecha'); // Asignar 'fecha' a la cita
        $cita->motivo = $request->input('motivo'); // Asignar 'motivo' a la cita
        $cita->diagnostico = $request->input('diagnostico'); // Asignar 'diagnostico' a la cita
        $cita->tratamiento = $request->input('tratamiento'); // Asignar 'tratamiento' a la cita
        $cita->mascota_id = $request->input('mascota_id'); // Asignar 'mascota_id' a la cita

        // Guardar la cita en la base de datos
        $cita->save();

        // Redirigir a la ruta anterior con un mensaje de éxito
        return redirect()->back()->with('success', 'Cita agregada exitosamente.');
    }
}

