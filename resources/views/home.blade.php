<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>トップページ</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mx-auto">
            <header>
                <div class="header row align-items-center">
                    <div class="header-logo col-md-2" >
                        <img src="{{ asset('image/logo1.png') }}">
                    </div>
                    <div class="header-login col-md-4 ml-auto">
                        <ul class="row justify-content-around">
                            @guest
                                <li><a href="{{ asset('login') }}">ログイン</a></li>
                                <li><a href="{{ asset('register') }}">新規登録</a></li>
                            @else
                                <li><a href="{{ asset('admin/user/mypage') }}">{{ Auth::user()->nickname }}さん</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form></li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <nav class="header-list">
                    <ul class="row justify-content-around col-md-12">
                        <li><a href="{{ asset('search') }}">検索する</a></li>
                        <li><a href="{{ asset('admin/post/create') }}">投稿する</a></li>
                        <li><a href="{{ asset('admin/user/mypage') }}">マイページ</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="container">
                    <div class="top-images mb-5">
                        <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('image/top-image1.jpg') }}">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('image/top-image2.jpg') }}">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('image/top-image3.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-page-content row">
                        <div class="left-content col-md-5">
                            <div class="content-introduction mt-5">
                                <h4>「まっぺん」は各地の特色を投稿する為の<br>
                                    サービスです。<br>
                                    <br>
                                    スポットやグルメなど、あなたの知っている<br>
                                    ことを、ぜひ投稿してみて下さい！<br>
                                    <br>
                                    まずは、他の方の投稿を見てみては<br>
                                    いかがでしょうか？<br>
                                </h4>
                            </div>
                        </div>
                        <div class="right-content col-md-7 row">
                            <div class="col-md-12">
                                <div class="content-others-title mb-4 col text-center">
                                    <h4>最新の投稿です</h4>
                                </div>
                                <div class="section-container">
                                    <div class="overflow-auto" style="height:500px">
                                        @foreach ($posts as $post)
                                            <section>
                                                <div class="col-md-12 row">
                                                    <a href="{{ action('Admin\PostController@details', ['id' => $post->id]) }}" class="col-md-12">
                                                        @if ($post->image_path)
                                                            <img src="{{ asset('image/top-image3.jpg') }}" class="col-md-8">
                                                        @else
                                                            <div class="col-md-5">
                                                                @include('parts/no_image')
                                                            </div>
                                                        @endif
                                                        <div class="content-about col-md-12 col text-left">
                                                            <br>
                                                            <label>タイトル：{{ $post->title }}</label><br>
                                                            <label>県：{{ $post->prefecture }}</label><br>
                                                            <label>カテゴリー：{{ $post->category }}</label><br>
                                                            <label>本文：{{ $post->body }}</label>
                                                        </div>
                                                    </a>
                                                </div>
                                            </section>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
            @include('parts/footer')
            </footer>
        </div>
    </body>
</html>
