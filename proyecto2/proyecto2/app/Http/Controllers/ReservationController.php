<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function fechasReservadas()
    {
        $fechasReservadas = Reservation::pluck('fecha', 'hora')->toArray();

        return response()->json($fechasReservadas);
    }

}
