<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta; // Ajusta esto según el nombre de tu modelo de consulta

class ConsultaController extends Controller
{
    public function guardarConsulta(Request $request)
    {
       // Validación de datos, puedes hacerla aquí

        // Crear una nueva instancia del modelo Consulta
        $consulta = new Consulta();

        // Asignar los datos del formulario al modelo
        $consulta->nombre = $request->nombre;
        $consulta->especie = $request->especie;
        $consulta->edad = $request->edad;
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
}
