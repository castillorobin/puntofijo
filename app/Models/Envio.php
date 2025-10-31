<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $fillable = [
        'guia',
        'estado',
        'nota',
        'nota_repartidor',
        'fecha_reprogramado', // Asegúrate de incluir este campo
    ];
    
      public function empleados()
{
    return $this->belongsToMany(Empleado::class)->withTimestamps();
}
}
