@extends('layout.master')
@section('title', 'Login')
@section('content')

    <body class="login-page">
        <div class="login-container">
            <h2 class="login-title">Faça login</h2>
            <form id="login-form" class="login-form">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" id="password" name="password" class="form-input" required>
                </div>
                <button type="button" onclick="login()" class="login-button">Login</button>
            </form>
            <div id="error-message" class="error-message" style="display: none;"></div>
            <p class="signup-link">Ainda não tem uma conta? <a href="{{ route('register.form') }}">Cadastre-se aqui</a></p>
        </div>

        <script>
            async function login() {
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

                try {
                    const response = await fetch('/api/login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            email,
                            password
                        })
                    });

                    const data = await response.json();

                    if (response.ok && data.token) {
                        // Armazene o token no localStorage
                        localStorage.setItem('token', data.token);
                        // Redirecione para a página desejada (por exemplo, home)
                        window.location.href = '/home';
                    } else {
                        // Exiba uma mensagem de erro
                        const errorMessage = document.getElementById('error-message');
                        errorMessage.style.display = 'block';
                        errorMessage.textContent = data.error || 'Erro ao fazer login';
                    }
                } catch (error) {
                    console.error('Erro:', error);
                    const errorMessage = document.getElementById('error-message');
                    errorMessage.style.display = 'block';
                    errorMessage.textContent = 'Erro na conexão com o servidor';
                }
            }
        </script>
    </body>

@endsection
