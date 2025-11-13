<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketc extends Model
{
    use HasFactory;

    protected $table = 'ticketcs'; // o el nombre real de tu tabla

    protected $fillable = [
        'comercio',
        'codigo',
        'cajero',
        'metodo',
        'total',
        'entrega',
        'cambio',
        'nota',
        'agencia',
        'persoi',
        'depari',
        'puntoi',
        'casili',
        'perso',
        'depar',
        'punto',
        'casil',
    ];
}
