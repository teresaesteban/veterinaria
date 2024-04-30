<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Consulta;
use Illuminate\Http\Request;
use App\Http\Controllers\ConsultaController;
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


Route::get('/historial', [CitaController::class, 'index'])->name('citas.index');
Route::get('/citas', [CitaController::class, 'index'])->name('citas.index');

Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');
Route::put('/citas/{cita}', [CitaController::class, 'update'])->name('citas.update'); // Ruta para actualizar cita

Route::post('/guardar-hora', [HoraController::class, 'store']);
// routes/web.php

Route::get('/fechas-reservadas', [ReservationController::class, 'fechasReservadas']);

Route::post('/enviar-consulta', [ConsultaController::class, 'guardarConsulta'])->name('enviar-consulta');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
