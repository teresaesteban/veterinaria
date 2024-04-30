<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{protected $fillable = ['nombre', 'tipo', 'raza', 'edad'];
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
