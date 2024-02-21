<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use App\Http\Controllers\SoporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ResponsableController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->post('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group( function() {

    // Route::get('test', function(){
    //     $message = "hola";
    //     return response()->json($message);
    // });
    Route::get('logout', [AuthenticationController::class, 'logout']);
    Route::post('soporte', [SoporteController::class, 'soporte']);
});

Route::post('login', [AuthenticationController::class, 'login']);
Route::get('organigrama', [AreaController::class, 'obtenerAreas']);
Route::get('/estructura/tblc_admivos', [ResponsableController::class, 'obtenerPersonas']);
Route::get('estructura', [ResponsableController::class, 'obtenerPersonas']);
Route::get('tblc_admivos', [CargoController::class, 'obtenerCargo']);