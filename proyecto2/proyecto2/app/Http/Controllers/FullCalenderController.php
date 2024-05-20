<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FullCalenderController extends Controller
{
    public function index()
    {
        // Obtén los eventos del usuario autenticado
        $events = Event::all();
        return view('full-calender', compact('events'));
    }

    public function action(Request $request)
    {
        $userId = Auth::id();

        if ($request->ajax()) {
            if ($request->type == 'add') {
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                    'user_id' => $userId,
                ]);

                return response()->json($event);
            }

            if ($request->type == 'update') {
                $event = Event::find($request->id);
                if ($event->user_id == $userId) {
                    $event->update([
                        'title' => $request->title,
                        'start' => $request->start,
                        'end' => $request->end,
                    ]);

                    return response()->json($event);
                }
            }

            if ($request->type == 'delete') {
                $event = Event::find($request->id);
                if ($event->user_id == $userId) {
                    $event->delete();

                    return response()->json($event);
                }else {
					return response()->json(['error' => 'No tienes permiso para borrar este evento.'], 403);
				}
            }
        }
    }
}

