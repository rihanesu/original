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
                    <div class="header-login col-md-2 ml-auto">
                        <ul class="row justify-content-around">
                            @guest
                                <li><a href="">ログイン</a></li>
                                <li><a href="">新規登録</a></li>
                            @else
                                <li><a href="">{{ Auth::user()->name }}さん</a></li>
                                <li><a href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <nav class="header-list">
                    <ul class="row justify-content-around col-md-12">
                        <li><a href="#">検索する</a></li>
                        <li><a href="#">投稿する</a></li>
                        <li><a href="#">マイページ</a></li>
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
                        <div class="left-content col-md-6">
                            <div class="content-introduction">
                                <p>「まっぺん」は各地の特色を投稿する為のサービスです。<br>
                                    スポットやグルメなど、あなたの知っていることを<br>
                                    ぜひ投稿してみて下さい！<br>
                                    まずは、他の方の投稿を見てはいかがでしょうか？<br>
                                </p>
                            </div>
                            <div class="top-page-search">
                                @include('parts/search')
                            </div>
                        </div>
                        <div class="right-content col-md-6 row">
                            <div class="content-others">
                                <div class="content-others-title mb-4 col text-center">
                                    <h4>他の方の投稿です</h4>
                                </div>
                            <div class="content-others-list col-md-12 row">
                                <img src="{{ asset('image/top-image1.jpg') }}" class="col-md-4">
                                <div class="content-about col-md-8">
                                    <a href="">投稿のタイトル</a><br>
                                    <a href="">〇〇県</a>
                                    <a href="">〇〇市</a><br>
                                    <a href="">カテゴリー1</a>
                                    <a href="">カテゴリー2</a><br>
                                    <a href="">タグ1</a>
                                    <a href="">タグ2</a><br>
                                </div>
                            </div>
                            <hr>
                            <div class="content-others-list col-md-12 row">
                                <img src="{{ asset('image/top-image1.jpg') }}" class="col-md-4">
                                <div class="content-about col-md-8">
                                    <a href="">投稿のタイトル</a><br>
                                    <a href="">〇〇県</a>
                                    <a href="">〇〇市</a><br>
                                    <a href="">カテゴリー1</a>
                                    <a href="">カテゴリー2</a><br>
                                    <a href="">タグ1</a>
                                    <a href="">タグ2</a><br>
                                </div>
                            </div>
                            <hr>
                            <div class="content-others-list col-md-12 row">
                                <img src="{{ asset('image/top-image1.jpg') }}" class="col-md-4">
                                <div class="content-about col-md-8">
                                    <a href="">投稿のタイトル</a><br>
                                    <a href="">〇〇県</a>
                                    <a href="">〇〇市</a><br>
                                    <a href="">カテゴリー1</a>
                                    <a href="">カテゴリー2</a><br>
                                    <a href="">タグ1</a>
                                    <a href="">タグ2</a><br>
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
