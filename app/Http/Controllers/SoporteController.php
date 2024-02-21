<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Soporte;
use Illuminate\Http\Request;

class SoporteController extends Controller
{
    //
    public function soporte(Request $request)
    {
        $soporte = Soporte::create($request->all());
        
        return response()->json($soporte);
    }

}
