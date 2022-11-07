<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'hora_ingreso',
        'hora_salida',
        'nombre',
        'patente',
        'rut',
    ];
}
