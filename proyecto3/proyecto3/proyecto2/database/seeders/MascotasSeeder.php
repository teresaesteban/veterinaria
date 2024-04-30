<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Mascota;

class MascotasSeeder extends Seeder
{
    public function run()
    {
        Mascota::create([
            'nombre' => 'Firulais',
            'tipo' => 'Perro',
            'raza' => 'Labrador',
            'edad' => 3
        ]);

        Mascota::create([
            'nombre' => 'Tom',
            'tipo' => 'Gato',
            'raza' => 'Siamés',
            'edad' => 2
        ]);

        // Agrega más mascotas si lo deseas
    }
}
