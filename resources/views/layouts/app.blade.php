<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'おつまみレシピ') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'おつまみレシピ') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="search_form form-group">
                            <form method="get" action="/">
                                <input type="text" name="q" placeholder="料理名・食材でレシピを検索" value="" class="form-control"> <i class="icon icon-search" data-v-0cd68cb3=""></i>
                            </form>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-4">
                            <h2 class="text-h2">お酒カテゴリーから探す</h2>
                            <ul>
                                <li>
                                    <a href="/categories/beer" class=""><span>ビール</span></span> <i class="icon icon-allow-right"></i></a>
                                </li>
                                <li>
                                    <a href="/categories/redwine" class=""><span>赤ワイン</span></span> <i class="icon icon-allow-right"></i></a>
                                </li>
                                <li>
                                    <a href="/categories/whitewine" class=""><span>白ワイン</span> <i class="icon icon-allow-right"></i></a>
                                </li>
                                <li>
                                    <a href="/categories/whiskyandsoda" class=""><span>ハイボール</span> <i class="icon icon-allow-right"></i></a>
                                </li>
                                <li>
                                    <a href="/categories/sake" class=""><span>日本酒</span> <i class="icon icon-allow-right"></i></a>
                                </li>
                                <li>
                                    <a href="/categories/remonsour" class=""><span>レモンサワー</span> <i class="icon icon-allow-right"></i></a>
                                </li>
                                <li>
                                    <a href="/categories/" class=""><span>もっと見る</span> <i class="icon icon-allow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
