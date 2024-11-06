<?php

use App\Http\Controllers\Front\ContatoController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PoliticaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/politica', [PoliticaController::class, 'index'])->name('politica');

Route::post('formulario/contato', [ContatoController::class, 'contato'])->name('formulario.contato');
Route::post('busca/cidades', [ContatoController::class, 'cidade'])->name('formulario.contato.cidade');