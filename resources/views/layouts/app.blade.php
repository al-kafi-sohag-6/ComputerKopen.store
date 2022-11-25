<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel')) - {{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Scripts --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    {{-- Linked CSS --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    {{-- Toaster --}}
    <link href="{{ asset('css/toastr/toastr.min.css') }}" rel="stylesheet">
    <script src="{{ asset('css/toastr/toastr.min.js') }}"></script>

    {{-- Page CSS --}}
    @stack('third_party_stylesheets')
    @stack('page_css')

</head>
<body>
    <div id="app">
        {{-- Main Navbar --}}
        @include('partials.frontend.nav')

        {{-- Main Page Content --}}
        <main class="">
            @yield('content')
        </main>

        {{-- Main Footer --}}
        @include('partials.frontend.footer')
    </div>

    {{-- Page Scripts --}}
    @stack('third_party_scripts')
    @stack('page_scripts')

    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>
</html>
