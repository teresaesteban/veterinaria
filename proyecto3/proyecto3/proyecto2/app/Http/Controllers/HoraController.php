<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hora;

class HoraController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required|integer|min:8|max:18',
        ]);

        $hora = new Hora;
        $hora->fecha = $request->fecha;
        $hora->hora = $request->hora;
        $hora->save();

        return response()->json(['success' => true]);
    }
}
