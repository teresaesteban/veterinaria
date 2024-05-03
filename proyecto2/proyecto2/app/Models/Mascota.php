<?php

// app/Models/Mascota.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo', 'edad', 'usuario_id'];

    // Relación con el usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
    // En tu modelo Mascota.php

public function citas()
{
    return $this->hasMany(Cita::class);
}

}
