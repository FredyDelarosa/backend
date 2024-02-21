<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use Illuminate\Support\Facades\DB;


class AreaController extends Controller
{

    public function obtenerAreas(){
        $results = DB::connection('bd_institucion')->table('organigrama') ->select('id', 'nombre') ->get();

        return response()->json($results);
    }

}
