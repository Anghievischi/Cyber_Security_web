@extends('layout.master')
@section('title', 'Register')
@section('content')

    <body class="register-page">
        <div class="register-container">
            <h2 class="register-title">Cadastro</h2>
            <form id="register-form" class="register-form">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" id="password" name="password" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirme a Senha:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-input"
                        required>
                </div>
                <button type="button" onclick="register()" class="register-button">Cadastrar</button>
            </form>
            <div id="error-message" class="error-message" style="display: none;"></div>
            <p class="login-link">Já tem uma conta? <a href="{{ route('login.form') }}">Faça login</a></p>
        </div>

        <script>
            async function register() {
                // Obtenha os valores dos campos do formulário
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const password_confirmation = document.getElementById('password_confirmation').value;

                try {
                    const response = await fetch('/api/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            name,
                            email,
                            password,
                            password_confirmation
                        })
                    });

                    const data = await response.json();

                    if (response.ok && data.token) {
                        // Armazene o token no localStorage
                        localStorage.setItem('token', data.token);
                        // Redirecione para a página inicial
                        window.location.href = '/';
                    } else {
                        // Exiba uma mensagem de erro
                        const errorMessage = document.getElementById('error-message');
                        errorMessage.style.display = 'block';
                        // Verifique se há erros de validação
                        if (data.errors) {
                            const errors = Object.values(data.errors).flat();
                            errorMessage.innerHTML = errors.join('<br>');
                        } else {
                            errorMessage.textContent = data.error || 'Erro ao cadastrar';
                        }
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
