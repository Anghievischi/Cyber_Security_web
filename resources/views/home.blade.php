@extends('layout.master')
@section('title', 'Home')

@push('style')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.css') }}">
@endpush

@section('content')
    <section class="home">
        <div class="welcome-container">
            <h1 class="welcome-title">Bem-vindo ao Nosso Site!</h1>
            @auth
                <p class="welcome-message">Olá, {{ auth()->user()->name }}!</p>
                <p class="welcome-instruction">Explore as funcionalidades e aproveite seu tempo conosco.</p>
                <a href="{{ route('logout') }}" class="btn-logout"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                <!-- Formulário oculto para o logout -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <p class="welcome-message">Por favor, faça login ou cadastre-se para acessar mais funcionalidades.</p>
                <div class="auth-buttons">
                    <a href="{{ route('login') }}" class="btn-login">Login</a>
                    <a href="{{ route('register') }}" class="btn-register">Cadastro</a>
                </div>
            @endauth
        </div>
    </section>
@endsection
