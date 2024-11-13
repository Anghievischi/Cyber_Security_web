@extends('layout.master')
@section('title', 'Register')
@section('content')

    <body class="register-page">
        <div class="register-container">
            <h2 class="register-title">Cadastro</h2>
            <form action="{{ route('register') }}" method="POST" class="register-form">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirme a Senha:</label>
                    <input type="password" name="password_confirmation" class="form-input" required>
                </div>
                <button type="submit" class="register-button">Cadastrar</button>
            </form>
            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <p class="login-link">Já tem uma conta? <a href="{{ route('login') }}">Faça login</a></p>
        </div>
    </body>

@endsection
