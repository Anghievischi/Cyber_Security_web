<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Registro de novo usuário com JWT
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Gera o token JWT para o usuário registrado
        $token = JWTAuth::fromUser($user);

        return response()->json(['user' => $user, 'token' => $token], 201);
    }

    // Login com JWT
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = Auth::guard('api')->attempt($credentials)) {
            return response()->json(['error' => 'Credenciais inválidas'], 401);
        }

        return response()->json(['token' => $token], 200);
    }

    // Logout e revogação do token
    public function logout(Request $request)
    {
        Auth::guard('api')->logout();

        // Opcionalmente, você pode invalidar a sessão aqui se estiver usando sessões
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Logout realizado com sucesso.']);
    }

    // Retorna o usuário autenticado
    public function user()
    {
        return response()->json(Auth::guard('api')->user());
    }
}
