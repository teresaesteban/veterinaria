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
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('all');
});
Route::get('home', function () {
    return view('home');
});
Route::get('historial', function () {
    return view('historial');
});
Route::get('/quelepasa', function () {
    return view('quelepasa');
});
Route::resource('citas', CitaController::class);


Route::get('/mascotas/{usuario}/show', [MascotaController::class, 'show'])->name('mascota.show');


Route::get('/historial', [HistorialController::class, 'index'])->name('historial.index');

Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender/action', [FullCalenderController::class, 'action']);

Route::get('/fechas-reservadas', [ReservationController::class, 'fechasReservadas']);

Route::post('/guardar-consulta', [ConsultaController::class, 'guardarConsulta'])->name('guardar-consulta');

Route::get('/mostrar-consultas', [ConsultaController::class, 'mostrar'])->name('mostrar-consultas');

Route::delete('/consultas/{consulta}', [ConsultaController::class, 'destroy'])->name('consultas.destroy');


Route::get('/usuarios', [UserController::class, 'index'])->middleware(['auth'])->name('usuarios.index');

Route::get('/usuarios/buscar', [UserController::class, 'search'])->name('usuarios.search');

Route::get('/usuarios/{usuario}/agregar-mascota', [UserController::class, 'agregarMascota'])->name('usuarios.agregar-mascota');

Route::post('/mascota/guardar', [MascotaController::class, 'guardar'])->name('mascota.guardar');

Route::post('/responder-consulta', 'App\Http\Controllers\ConsultaController@responder')->name('responder.consulta');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::group(['middleware' => ['auth']], function () {
    // Otras rutas de usuarios aquí

    // Ruta para el detalle de la mascota
    Route::get('/usuarios/{usuario}/mascota', [MascotaController::class, 'show'])->name('usuarios.mascota');
});


Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
