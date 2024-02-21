<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'tblc_admivos';
    protected $primarykey = 'cargo';
    protected $connection = "bd_institucion";

    public function __construct(array $attributes = [])
    {
        $this->table = $this->getConnection()->getDatabaseName() . '.' . $this->table;
        parent::__construct($attributes);
    }

    public function cargos(){
        return $this->hasMany(Persona::class, 'curp', 'cargo');
    }
}
