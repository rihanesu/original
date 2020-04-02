<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

　　　　　<script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
        <body>
            <header>
                <div class="header container row align-items-center mb-5 col-md-12 mx-auto">
                    <div class="header-logo col-md-2">
                        @include('parts/logo')
                    </div>
                    <div class="header-list col-md-10">
                        <ul class="row justify-content-around">
                            <li><a href="{{ asset('search') }}">検索する</a></li>
                            <li><a href="{{ asset('admin/post/create') }}">投稿する</a></li>
                            <li><a href="{{ asset('admin/user/mypage') }}">マイページ</a></li>
                        </ul>
                    </div>
                </div>
            </header>
        <main>
            @yield('content')
        </main>
        <hr>
            @include('parts/footer')
        </body>
    </html>
