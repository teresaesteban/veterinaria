<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use App\Models\Cita;

class HistorialController extends Controller
{

    public function index()
    {
        // Obtener todas las citas
        $citas = Cita::all();

        // Pasar las citas a la vista
        return view('historial', compact('citas'));
    }
}