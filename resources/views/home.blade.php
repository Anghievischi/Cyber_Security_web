@extends('layout.master')
@section('title', 'Home')

@push('style')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.css') }}">
@endpush

@section('content')
    <section class="home">
        @auth
            <p>Bem-vindo, {{ auth()->user()->name }}!</p>
            <p><a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></p>
            <!-- Formulário oculto para o logout -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <p>Bem-vindo ao nosso site! Por favor, faça login ou cadastre-se para acessar mais funcionalidades.</p>
            <p><a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Cadastro</a></p>
        @endauth
    </section>
@endsection
