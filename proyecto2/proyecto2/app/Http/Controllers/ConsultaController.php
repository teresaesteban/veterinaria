<?php
// app/Http/Controllers/ConsultaController.php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultaController extends Controller
{
    public function responder(Request $request)
    {
        // Validar y procesar la respuesta
        $consultaId = $request->input('consulta_id');
        $respuesta = $request->input('respuesta');

        // Suponiendo que tengas una columna 'respuesta' en tu tabla 'consultas', puedes actualizarla
        Consulta::where('id', $consultaId)->update(['respuesta' => $respuesta]);

        // Redirigir a la lista de consultas con un mensaje de éxito
        return redirect()->route('mostrar-consultas')->with('success', '¡Se ha enviado la respuesta!');
    }

    public function guardarConsulta(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'sintomas' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Crear una nueva instancia del modelo Consulta
        $consulta = new Consulta();
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('images/veterinaria');
            $file->move($destinationPath, $fileName);
            $consulta->imagen = $fileName;
        }

        // Asignar los datos del formulario al modelo
        $consulta->user_id = Auth::id();  // Capturar el ID del usuario autenticado
        $consulta->nombre = $request->nombre;
        $consulta->especie = $request->especie;
        $consulta->edad = $request->edad ?? null;
        $consulta->sintomas = $request->sintomas;
        $consulta->comentarios = $request->comentarios;

        // Guardar en la base de datos
        $consulta->save();

        // Redireccionar a donde quieras después de guardar
        return redirect()->route('mostrar-consultas')->with('success', 'Consulta enviada correctamente');
    }

    public function mostrar()
    {
        // Obtener todas las consultas
        $consultas = Consulta::all();

        // Mostrar la vista de consultas con los datos
        return view('consultas', ['consultas' => $consultas]);
    }

    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
        return redirect()->route('mostrar-consultas')->with('success', 'Consulta eliminada correctamente.');
    }

    public function checkNewMessages()
    {
        // Suponiendo que una consulta sin respuesta tiene la columna 'respuesta' vacía
        $newMessagesCount = Consulta::whereNull('respuesta')->count();

        return response()->json(['newMessages' => $newMessagesCount]);
    }
}
