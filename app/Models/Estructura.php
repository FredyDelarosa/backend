<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estructura extends Model
{
    use HasFactory;

    protected $table = 'estructura';
    protected $primaryKey = 'id';
    protected $connection = "bd_institucion";

    public function __construct(array $attributes = [])
    {
        $this->table = $this->getConnection()->getDatabaseName() . '.' . $this->table;
        parent::__construct($attributes);
    }

    public function personas(){
        
        return $this->hasMany(Persona::class, 'organigrama_id', 'id');
    }
}
