<?php
/**
 * API de Conculta de CEP Base 2018
 * @version 1.0
 * @package CEP
 * @subpackage Controller API
 * @author Thiago Cantero Mari Monteiro
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro
 * @license http://www.thiagocantero.com.br/sobre
 **/


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cep;


class CepAPI extends Controller
{

    public function getCEP($cep){


        if (Cep::where('cep', $cep)->exists()){
            $CEP = Cep::where('cep', $cep)
                ->get(['cep',
                    'logradouro',
                    'complemento',
                    'bairro',
                    'localidade',
                    'uf','ibge']);


            return response()->json($CEP, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_PRETTY_PRINT | JSON_INVALID_UTF8_IGNORE);
        }else{
            return response()->json([
                "erro" => "endereço inválido"
            ], 404  );
        }
    }

}
