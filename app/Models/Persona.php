<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'tblc_admivos';
    protected $primaryKey = 'curp';
    public $incrementing = false;
    protected $connection = "bd_institucion";

    public function __construct(array $attributes = [])
    {
        $this->table = $this->getConnection()->getDatabaseName() . '.' . $this->getTable();
        parent::__construct($attributes);
    }

    public function estructura(){
        return $this->belongsTo(Estructura::class, 'organigrama_id', 'id');
    }

    public function cargo(){
        return $this->belongsTo(Cargo::class, 'curp', 'cargo');
    }
}
