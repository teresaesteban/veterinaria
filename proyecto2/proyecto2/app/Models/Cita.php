<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    // Resto del modelo
    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
}

