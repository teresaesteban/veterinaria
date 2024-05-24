<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['user_id', 'nombre', 'especie', 'edad', 'sintomas', 'imagen', 'comentarios'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}