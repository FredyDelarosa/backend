<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estructura;
use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;

class ResponsableController extends Controller
{
    public function obtenerPersonas(Request $request)
    {
        $request->validate([
            'area' => 'required'
        ]);

        $personas_curp = Estructura::where('organigrama_id', $request->area)->get()->pluck('curp');
      
        // $personas = Persona::selectRaw('concat(nombre, " ", ape_pat, " ",ape_mat) as nombre')->whereIn('curp', $personas_curp)->get();
        $personas = Persona::select('curp', DB::raw('concat(nombre, " ", ape_pat, " ",ape_mat) as nombre'))->whereIn('curp', $personas_curp)->get();
        
        return response()->json($personas);
    }
}
