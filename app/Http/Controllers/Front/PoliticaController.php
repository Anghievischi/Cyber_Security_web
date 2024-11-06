<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PoliticaController extends Controller
{

    public function index(): View
    {
        $dataPolitica = [
            'nome' => 'Nome do Site',
            'email' => 'contato@exemplo.com',
            'link' => 'https://www.exemplo.com',
            'data_modificacao' => '08/30/2024',
        ];

        return view('politica', compact('dataPolitica'));
    }
}
