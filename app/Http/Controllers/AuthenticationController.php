<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login (Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken('api_token' /*auth_token */)->plainTextToken;

            return response()->json([
                'ok' => true,
                'token' => $token
            ], 200);
        }

        return response()->json(['message' => 'No autorizado'], 401);
    
    }
    
    public function logout()
    {
        auth()->user()->tokens()->delete();        
        return response()->json(["message" => "Sesión Cerrada",]); 
    }
}
