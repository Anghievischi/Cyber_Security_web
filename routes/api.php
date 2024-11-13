<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CepAPI;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/{cep}/json', [CepAPI::class, 'getCEP']);
Route::post('/salvar', [EnderecoController::class, 'index'])->name('endereco');
