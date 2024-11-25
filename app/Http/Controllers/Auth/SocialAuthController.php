<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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
            $user = Socialite::driver('google')->user();
            $this->loginOrRegisterUser($user, 'google');
    
            // Redirecionar o usuário autenticado
            return redirect()->route('home'); // ou qualquer rota configurada
        } catch (\Exception $e) {
            // Tratamento de erro (caso o login falhe)
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

        Auth::login($user);
    }
}
