<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hestado extends Model
{
    protected $table = 'hestados';

    protected $fillable = [
        'idenvio',
        'estado',
        'usuario',
    ];
}
