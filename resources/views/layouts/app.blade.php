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
    {{--<nav class="navbar navbar-default navbar-static-top">--}}
    {{--<div class="container">--}}
    {{--<div class="navbar-header">--}}

    {{--<!-- Collapsed Hamburger -->--}}
    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
    {{--<span class="sr-only">Toggle Navigation</span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--</button>--}}

    {{--<!-- Branding Image -->--}}
    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
    {{--{{ config('app.name', 'Laravel') }}--}}
    {{--</a>--}}
    {{--</div>--}}

    {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
    {{--<!-- Left Side Of Navbar -->--}}
    {{--<ul class="nav navbar-nav">--}}
    {{--&nbsp;--}}
    {{--</ul>--}}

    {{--<!-- Right Side Of Navbar -->--}}
    {{--<ul class="nav navbar-nav navbar-right">--}}
    {{--<!-- Authentication Links -->--}}
    {{--@guest--}}
    {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
    {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
    {{--@else--}}
    {{--<li class="dropdown">--}}
    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>--}}
    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--</a>--}}

    {{--<ul class="dropdown-menu">--}}
    {{--<li>--}}
    {{--<a href="{{ route('logout') }}"--}}
    {{--onclick="event.preventDefault();--}}
    {{--document.getElementById('logout-form').submit();">--}}
    {{--Logout--}}
    {{--</a>--}}

    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--{{ csrf_field() }}--}}
    {{--</form>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--@endguest--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</nav>--}}
    <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="/">BBS<br></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active"
                                                                href="/topics/create">Create Topic</a></li>


                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('contact') }}">contact
                            us</a></li>
                    @guest
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('login') }}">Log
                                in</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('register') }}">Sign
                                up</a></li>
                    @else
                        <li class="nav-item" role="presentation"><a class="nav-link"
                                                                    href="/topics">Topics</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active"
                                                                    href="/messages">Messages</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
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
