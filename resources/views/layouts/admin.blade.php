<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
      <header>
        <div class="header">
          <div class="header-logo">
            <a link="#">ロゴ</a>
        </div>
        <div class="header-list">
          <ul style="list-style: none;">
            <li><a href="#">検索する</a></li>
            <li><a href="#">投稿する</a></li>
            <li><a href="#">マイページ</a></li>
          </ul>
        </div>
        <hr>
        </div>
      </header>
      <main>
        @yield('content')
      </main>
      <hr>
      <footer>
        <div class="footer">
          <div class="footer-logo">
            <h2>ロゴ</h2>
          </div>
          <div class="footer-list">
            <ul style="list-style: none;">
              <li><a href="#">ログイン</a></li>
              <li><a href="#">新規登録</a></li>
              <li><a href="#">検索する</a></li>
              <li><a href="#">投稿する</a></li>
              <li><a href="#">マイページ</a></li>
            </ul>
          </div>
      </footer>
    </body>
</html>
