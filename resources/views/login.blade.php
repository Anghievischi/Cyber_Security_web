@extends('layout.master')
@section('title', 'Login')
@section('content')

    <body class="login-page">
        <div class="login-container">
            <h2 class="login-title">Faça login</h2>
            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" class="form-input" required>
                </div>
                <div class="remember-me">
                    <input type="checkbox" name="remember" class="remember-checkbox">
                    <label for="remember" class="remember-label">Lembre de mim</label>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            @if ($errors->any())
                <div class="error-message">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <p class="signup-link">Ainda não tem uma conta? <a href="{{ route('register') }}">Cadastre-se aqui</a></p>
        </div>
    </body>

@endsection
