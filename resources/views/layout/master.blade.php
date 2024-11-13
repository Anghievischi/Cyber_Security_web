<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6fc06c" />
    <meta name="description" content="website">
    <meta name="keywords" content="website">
    <meta name="robots" content="index, follow">

    <title>
        @yield('title') - WEBSITE
    </title>

    {{-- <link href="{{ asset('dist/style.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ mix('resources/css/style.css') }}">
    @stack('style')
</head>

<body>

    @component('components.Loading')
    @endcomponent

    {{-- HEADER --}}
    {{-- @component('components.Header')
    @endcomponent --}}

    {{-- CONTENT --}}
    <main>@yield('content')</main>

    {{-- FOOTER --}}
    {{-- @component('components.Footer')
    @endcomponent --}}

    {{-- MANAGER COOKIES --}}
    {{-- @component('components.ManagerCookies')
    @endcomponent --}}

    {{-- SCRIPTS --}}
    <script src="{{ asset('js/creator.js') }}"></script>
    <script src="{{ asset('libs/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/jquery.form.js') }}"></script>
    <script src="{{ asset('libs/jquery-ui.js') }}"></script>
    <script src="{{ asset('libs/fancybox/fancybox.js') }}"></script>
    <script src="{{ asset('libs/auto-height.js') }}"></script>
    <script src="{{ asset('libs/maskedPlugin.js') }}"></script>
    <script src="{{ asset('libs/jquery.mask.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @stack('script')
</body>

</html>
