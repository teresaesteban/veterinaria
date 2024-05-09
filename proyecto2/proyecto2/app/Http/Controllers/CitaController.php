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
        'mascota_id' => 'required|exists:mascotas,id', // Ensure mascota_id exists in mascotas table
    ]);

    // Create a new cita
    $cita = new Cita();
    $cita->fecha = $request->input('fecha');
    $cita->motivo = $request->input('motivo');
    $cita->diagnostico = $request->input('diagnostico');
    $cita->tratamiento = $request->input('tratamiento');
    $cita->mascota_id = $request->input('mascota_id'); // Assign the mascota_id

    // Save the cita
    $cita->save();

    // Redirect to the show route with the mascota_id
    return redirect()->back()->with('success', 'Cita agregada exitosamente.');
}

    }


