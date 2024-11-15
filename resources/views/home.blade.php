@extends('layout.master')
@section('title', 'Home')

@push('style')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endpush

@section('content')
    <section class="home">
        <div class="welcome-container">
            <h1 class="welcome-title">Bem-vindo!</h1>
            <!-- Mensagem de boas-vindas dinâmica -->
            <p id="welcome-message" class="welcome-message">Carregando...</p>
            <div id="auth-buttons" class="auth-buttons" style="display: none;">
                <a href="{{ route('login.form') }}" class="btn-login">Login</a>
                <a href="{{ route('register.form') }}" class="btn-register">Cadastro</a>
            </div>

            <!-- Linha separadora -->
            <div id="separator" class="separator" style="display: none;">
                <span>ou</span>
            </div>

            <div id="social-auth-buttons" class="auth-buttons" style="display: none;">
                <a href="{{ route('login.google') }}" class="btn-social btn-google">
                    <i class="fab fa-google"></i> Google
                </a>
                <a href="{{ route('login.facebook') }}" class="btn-social btn-facebook">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
            </div>

            <!-- Botão de logout para usuários logados -->
            <a href="#" id="logout-button" class="btn-logout" style="display: none;" onclick="logout()">Sair</a>
        </div>
    </section>

    <script>
        // Função para obter dados do usuário
        async function getUserData() {
            const token = localStorage.getItem('token');
            const welcomeMessage = document.getElementById('welcome-message');
            const authButtons = document.getElementById('auth-buttons');
            const separator = document.getElementById('separator');
            const socialAuthButtons = document.getElementById('social-auth-buttons');
            const logoutButton = document.getElementById('logout-button');

            if (!token) {
                // Usuário não autenticado
                welcomeMessage.textContent = 'Por favor, faça login ou cadastre-se para acessar mais funcionalidades.';
                authButtons.style.display = 'block';
                separator.style.display = 'block';
                socialAuthButtons.style.display = 'block';
                return;
            }

            // Usuário autenticado, obtemos os dados dele
            try {
                const response = await fetch('/api/user', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json'
                    }
                });

                if (response.ok) {
                    const user = await response.json();
                    welcomeMessage.textContent =
                        `Olá, ${user.name}! Explore as funcionalidades e aproveite seu tempo conosco.`;
                    logoutButton.style.display = 'block';
                } else {
                    throw new Error('Erro ao obter dados do usuário');
                }
            } catch (error) {
                console.error('Erro:', error);
                welcomeMessage.textContent = 'Erro ao carregar as informações. Por favor, faça login novamente.';
                authButtons.style.display = 'block';
                separator.style.display = 'block';
                socialAuthButtons.style.display = 'block';
            }
        }

        // Função para logout
        function logout() {
            localStorage.removeItem('token');
            window.location.reload(); // Recarrega a página para mostrar o estado de não autenticado
        }

        // Executa a função getUserData ao carregar a página
        document.addEventListener('DOMContentLoaded', getUserData);
    </script>

@endsection
