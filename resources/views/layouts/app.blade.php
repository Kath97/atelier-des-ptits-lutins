<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CDN - Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config("L'Atelier des P'tits Lutins", "L'Atelier des P'tits Lutins") }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <!-- Navbar -->
    <header>
        <div>
            <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-black shadow-sm">
                <div class="container">

                    <!-- Brand -->
                    <a class="navbar-brand" href="{{ url('/') }}">L'Atelier des P'tits Lutins</a>

                    <!-- Hamburger menu -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/ateliers') }}">Ateliers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                            </li>

                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest

                            @auth
        @if (Auth::user()->role == 1)
        <li id="link-crea-atelier" class="nav-item">
        <a class="nav-link" href="{{ route('ateliers.create') }}">Créer un nouvel atelier</a>
                            </li>

        @endif
        @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main id="body-color">
        @yield('content')
    </main>


    <!-- Footer -->
    <footer id="l-footer" class="text-center py-2">
        <div class="container">
            <p class="mx-0 small">
                <br>Réalisé par Kathleen MALIALIN
                <br>Copyright&copy;2020. Tous droits
                réservés.
                <a href="">Mentions légales.</a>
            </p>
        </div>
    </footer>
    </div>
</body>

</html>
