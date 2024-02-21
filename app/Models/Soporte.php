<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    use HasFactory;

    protected $table = "soporte";

    protected $fillable = [
        'id',
        'fecha',
        'area',
        'responsable',
        'cargo',
        'conexion',
        'fallo',
        'descripcion',
        'grupo',
        'equipo',
        'anti',
        'ip',
        'mac'
    ];
}
