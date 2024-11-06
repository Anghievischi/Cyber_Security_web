<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContatoRequest;
use App\Mail\Contato;
use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ContatoController extends Controller
{
    public function index(): View
    {
        $estados = Estado::get();

        return view('contato', compact('estados'));
    }

    public function cidade(Request $request)
    {

        $cidades = Cidade::where('uf', $request->post_val)->get();

        return response()->json(['cidades' => $cidades]);
    }

    public function contato(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'nome' => 'required|string',
                'telefone' => 'required|string',
                'email' => 'required|email',
                'uf' => 'required|string',
                'cidade' => 'required|string',
                'mensagem' => 'required|string',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório',
                'telefone.required' => 'O campo telefone é obrigatório',
                'email.required' => 'O campo email é obrigatório',
                'email.email' => 'O campo email deve ser um email válido',
                'uf.required' => 'Selecione U.F.',
                'cidade.required' => 'O campo cidade é obrigatório',
                'mensagem.required' => 'O campo mensagem é obrigatório'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Erro ao enviar mensagem!');
        }

        $mail = new Contato(
            $request->nome,
            $request->email,
            $request->telefone,
            $request->uf,
            $request->cidade,
            $request->mensagem
        );

        Mail::to(env('MAIL_RECEIVER'), env('MAIL_FROM_NAME'))->send($mail);

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
