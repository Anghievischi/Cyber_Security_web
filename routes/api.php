<?php

use App\Http\Controllers\Api\CepAPI;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnderecoController;


Route::post('/register', [AuthController::class, 'register'])->name('api.register');
Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::middleware('auth:api')->get('/user', [AuthController::class, 'user'])->name('api.user');

// Outras rotas da API
Route::get('/{cep}/json', [CepAPI::class, 'getCEP']);
Route::post('/salvar', [EnderecoController::class, 'index'])->name('endereco');
