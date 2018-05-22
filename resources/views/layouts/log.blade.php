<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <!-- CSRF Token -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    {{--<link rel="stylesheet" href="{{url("/css/sticky-dark-top-nav-with-dropdown.css")}}">--}}
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/Forum---Thread-listing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Network-Particles-Hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-with-rotating-cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/-Login-form-Page-BS4-.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Imad Eddine BEKKOUCHE') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
<div id="app">
    @guest
        <div></div>
    @else
        @csrf
    @endguest
    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>

<script src="{{ asset('js/bs-animation.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>
