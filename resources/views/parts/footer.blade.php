<footer>
  <div class="footer row align-items-center mt-5">
    <div class="footer-logo col-md-2">
      <a href="{{ asset('home') }}"><img src="{{ asset('image/logo1.png') }}"></a>
    </div>
    <nav class="footer-list col-md-10">
      <ul class="row justify-content-around">
        @guest
            <li><a href="{{ asset('login') }}">ログイン</a></li>
            <li><a href="{{ asset('register') }}">新規登録</a></li>
            <li><a href="{{ asset('search') }}">検索する</a></li>
            <li><a href="{{ asset('admin/post/create') }}">投稿する</a></li>
        @else
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">ログアウト</a></li>
            <li><a href="{{ asset('search') }}">検索する</a></li>
            <li><a href="{{ asset('admin/post/create') }}">投稿する</a></li>
            <li><a href="{{ asset('admin/user/mypage') }}">マイページ</a></li>
        @endguest
      </ul>
  </nav>
</footer>
