<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ContatoController;
use App\Http\Controllers\Front\PoliticaController;
use App\Http\Controllers\Auth\SocialAuthController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/politica', [PoliticaController::class, 'index'])->name('politica');

Route::post('formulario/contato', [ContatoController::class, 'contato'])->name('formulario.contato');
Route::post('busca/cidades', [ContatoController::class, 'cidade'])->name('formulario.contato.cidade');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login.form');

Route::get('/register', function () {
    return view('register');
})->name('register.form');

// Rota para autenticação por JWT
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas de autenticação com Google e Facebook
Route::get('/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
Route::get('/login/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
