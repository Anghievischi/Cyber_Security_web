@extends('layout.master')
@section('title', '404')
@section('content')

    @push('style')
        <style>
            main {
                background-color: #ffffff;
            }

            .not_found {
                text-align: center;
                color: #555;
            }

            .content {
                padding: 60px 0;
            }

            .content,
            .container {
                display: block;
                max-width: 90%;
                margin: 0 auto;
            }

            .not_found_header {
                width: 500px;
                max-width: 100%;
                margin: 0 auto;
            }

            .not_found .error {
                font-size: 8em;
                font-weight: var(--weight-light);
                color: #ccc;
                margin-bottom: 40px;
            }

            p {
                margin: 20px 0 0 0;
            }

            .not_found_btn {
                display: inline-block;
                margin-top: 60px;
                padding: 20px 40px;
                color: #fff;
                text-decoration: none;
                font-weight: var(--weight-bold);
            }

            .gradient-green {
                background-image: var(--gradient-site);
            }

            .gradient {
                background-size: 200% auto;
                transition-duration: 0.5s;
            }

            .radius {
                -webkit-border-radius: var(--radius-normal);
                -moz-border-radius: var(--radius-normal);
                border-radius: var(--radius-normal);
            }

            .transition {
                transition-duration: var(--hover-duration);
            }

            .gradient-hover:hover {
                background-position: right center;
            }
        </style>
    @endpush

    <article class="not_found">
        <div class="container content">
            <div class="not_found_header">
                <p class="error">•404•</p>
                <h1>Ooops. Conteúdo indispinível :/</h1>
                <p>Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi
                    removido :/</p>

                <a class="not_found_btn gradient gradient-green gradient-hover transition radius" title="Continue navegando!"
                    href="{{ route('home') }}">Continue navegando!</a>
            </div>
        </div>
    </article>

@endsection
