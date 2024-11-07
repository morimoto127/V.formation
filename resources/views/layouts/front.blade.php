<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}">V.formation</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto"></ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{url('user/recipes/create')}}">レシピ投稿</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('user/recipes')}}">マイページ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('user/profile/edit')}}">プロフィール編集</a>
                                </li>
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/')}}">ログイン</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('register')}}">会員登録</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('logout')}}">ログアウト</a>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                </div>
            </nav>

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
            <footer class="container-fluid mt-5">
                <div class="row">
                    <div class="col-5 Copyright">©2024 V.formation All Rights Reserved.
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('/image/archive-fill.svg') }}" class="archive">
                        <img src="{{ asset('/image/facebook.svg') }}" class="facebook">
                        <img src="{{ asset('/image/google.svg') }}" class="google">                      
                    </div>
                    <div class="col-5" text-end">
                        <small>develop an application</small>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>