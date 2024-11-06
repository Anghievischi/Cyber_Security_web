@extends('mail.custom')
@section('title', 'Contato')
@section('content')
    <tr>
        <td bgcolor="#ffffff" style="padding: 0px;">
            <table class="tb-info" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td width='30%'><strong>Nome:</strong></td>
                    <td width='60%'>{{ $nome }}</td>
                </tr>
                <tr>
                    <td width='30%'><strong>Estado:</strong></td>
                    <td width='60%'>{{ $uf }}</td>
                </tr>
                <tr>
                    <td width='30%'><strong>Cidade:</strong></td>
                    <td width='60%'>{{ $cidade }}</td>
                </tr>
                <tr>
                    <td width='30%'><strong>Telefone:</strong></td>
                    <td width='60%'>{{ $telefone }}</td>
                </tr>
                <tr>
                    <td width='30%'><strong>E-mail:</strong></td>
                    <td width='60%'>
                        <a target='_blank' href='mailto:{{ $email }}'>
                            {{ $email }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <td width='30%'><strong>Mensagem:</strong></td>
                    <td width='60%'>{{ $mensagem }}</td>
                </tr>
            </table>
        </td>
    </tr>
@endsection
