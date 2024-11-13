<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ContatoController;
use App\Http\Controllers\Front\PoliticaController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/politica', [PoliticaController::class, 'index'])->name('politica');

Route::post('formulario/contato', [ContatoController::class, 'contato'])->name('formulario.contato');
Route::post('busca/cidades', [ContatoController::class, 'cidade'])->name('formulario.contato.cidade');

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);