<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Consulta;
use Illuminate\Http\Request;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\HoraController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('all');
});
Route::get('home', function () {
    return view('home');
});
Route::get('calendario', function () {
    return view('calendario');
});
Route::get('historial', function () {
    return view('historial');
});
Route::get('/quelepasa', function () {
    return view('quelepasa');
});
Route::resource('citas', CitaController::class);

Route::get('/historial', [HistorialController::class, 'index'])->name('historial.index');


Route::post('/guardar-hora', [HoraController::class, 'store']);
// routes/web.php

Route::get('/fechas-reservadas', [ReservationController::class, 'fechasReservadas']);

Route::get('/formulario-consulta', function () {
    return view('quelepasa'); // Cambia 'quelepasa' por el nombre de tu vista
});
Route::post('/enviar-consulta', function (Request $request) {
    // Validar los datos del formulario (opcional)
    $request->validate([
        'nombre' => 'required|string|max:255',
        'especie' => 'required|string|max:255',
        'edad' => 'required|integer',
        'sintomas' => 'required|string',
        'comentarios' => 'nullable|string',
    ]);

    // Crear una nueva instancia de Consulta y guardarla en la base de datos
    $consulta = new Consulta();
    $consulta->nombre = $request->nombre;
    $consulta->especie = $request->especie;
    $consulta->edad = $request->edad;
    $consulta->sintomas = $request->sintomas;
    $consulta->comentarios = $request->comentarios;
    $consulta->save();

    // Redirigir de vuelta al formulario con un mensaje de éxito
    return redirect('/formulario-consulta')->with('success', 'Consulta enviada correctamente.');
})->name('enviar-consulta');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
