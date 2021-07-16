<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}


        <div class="row min-vh-100">
            <!-- Left sidebar -->
            <div class="col-3 col-lg-3 bg-sidebar">
                <h1 id="app-name">Due List</h1>
                <div>
                    <nav class="nav flex-column pt-3 pb-3 border-top">
                        <!-- Guest menu links -->
                        @guest
                            @if (Route::has('login'))
                                <a class="nav-link {{ Route::is('login') ? 'active' : ''}}" href="{{ route('login') }}">
                                    <i class="bi bi-box-arrow-in-right pr-3"></i>{{ __('Login') }}
                                </a>
                            @endif
                            @if (Route::has('register'))
                                <a class="nav-link {{ Route::is('register') ? 'active' : ''}}" href="{{ route('register') }}">
                                    <i class="bi bi-person-plus-fill pr-3"></i>{{ __('Register') }}
                                </a>
                            @endif
                        @else
                            <a class="nav-link {{ Route::is('home') ? 'active' : ''}}" href="#">Active</a>
                            <a class="nav-link" href="#">
                                <i class="bi bi-clipboard pr-3"></i>List name
                                <i class="bi bi-pencil-fill ml-5"></i>
                                <i class="bi bi-trash pl-3 text-danger"></i>
                            </a>
                            <a class="nav-link {{ Route::is('lists.index') ? 'active' : ''}}" href="{{ route('lists.index') }}">
                                <i class="bi bi-clipboard-plus pr-3"></i>New list
                            </a>
                        @endguest
                    </nav>
                    @auth
                        <nav class="nav flex-column pt-3 border-top">
                            <a class="nav-link {{ Route::is('profile') ? 'active' : ''}}" href="#">
                                <i class="bi bi-person-circle pr-3"></i>Profile
                            </a>
                            <a class="nav-link" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-left pr-3"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </nav>
                    @endauth
                </div>
            </div>
            <div class="col bg-light">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
        
    </div>
</body>
</html>
