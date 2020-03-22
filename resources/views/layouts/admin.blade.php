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
        <div class="header container row">
          <div class="header-logo">
            <label link="#">@include('parts/logo')</label>
          </div>
          <div class="header-list">
            <ul class="row">
              <li><a href="#">検索する</a></li>
              <li><a href="#">投稿する</a></li>
              <li><a href="#">マイページ</a></li>
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
