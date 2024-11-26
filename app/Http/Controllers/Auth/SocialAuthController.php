<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class SocialAuthController extends Controller
{
    // Redireciona para o Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback do Google
    public function handleGoogleCallback()
    {
        try {
            $socialUser = Socialite::driver('google')->user();
            $token = $this->loginOrRegisterUser($socialUser, 'google');

            // Retorna uma view que armazena o token
            return view('auth.social_login', ['token' => $token]);
        } catch (\Exception $e) {
            return redirect()->route('login.form')->with('error', 'Falha no login. Por favor, tente novamente.');
        }
    }

    // Redireciona para o Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Callback do Facebook
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->loginOrRegisterUser($user, 'facebook');
        return redirect()->route('home');
    }

    // Método para login ou registro de usuários OAuth
    protected function loginOrRegisterUser($socialUser, $provider)
    {
        $user = User::firstOrCreate(
            ['email' => $socialUser->getEmail()],
            [
                'name' => $socialUser->getName(),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'email_verified_at' => now(),
                'password' => bcrypt(Str::random(16)),
            ]
        );

        // Gerar o token JWT para o usuário autenticado
        $token = JWTAuth::fromUser($user);

        return $token;
    }
}
