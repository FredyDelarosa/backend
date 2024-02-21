<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use App\Models\Persona;
use Illuminate\Http\Request;


class CargoController extends Controller
{
    public function obtenerCargo(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $cargo_curp = Cargo::where('curp', $request->nombre)->get()->pluck('curp');

        $cargo = Persona::select('cargo')->whereIn('curp', $cargo_curp)->get();

        return response()->json($cargo);
    }
}
