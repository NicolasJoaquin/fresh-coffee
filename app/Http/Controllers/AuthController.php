<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register(RegisterRequest $request) { // Tipado del request
        // Validando el registro a través de las reglas de RegisterRequest
        $data = $request->validated();
        // Creando el usuario
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        // Response
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user,
        ];
    }
    public function login(LoginRequest $request) {
        $data = $request->validated();
        // Validar pass

        if(!Auth::attempt($data)) {
            return response([
                'errors' => ['others' => ['El email o el password son incorrectos']],
            ], 422);
        }
        $user = Auth::user();
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user,
        ];
    }
    public function logout(Request $request) {
        $user = $request->user();
        $user->currentAccessToken()->delete();
        return [
            'user' => null,
        ];
    }
}
