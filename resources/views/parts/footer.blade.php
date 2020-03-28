<footer>
  <div class="footer row align-items-center mt-5">
    <div class="footer-logo col-md-2">
      <img src="{{ asset('image/logo1.png') }}">
    </div>
    <nav class="footer-list col-md-10">
      <ul class="row justify-content-around">
        @guest
            <li><a href="#">ログイン</a></li>
            <li><a href="#">新規登録</a></li>
            <li><a href="#">検索する</a></li>
            <li><a href="#">投稿する</a></li>
        @else
            <li><a href="#">ログアウト</a></li>
            <li><a href="#">検索する</a></li>
            <li><a href="#">投稿する</a></li>
            <li><a href="#">マイページ</a></li>
        @endguest
      </ul>
  </nav>
</footer>
