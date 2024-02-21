<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $connection = "bd_institucion";

    protected $table = "organigrama";

    protected $fillable = [ 'id', 'nombre'];
}
