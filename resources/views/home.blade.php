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
        <header>
            <div class="header-container-row">
                <div class="header-logo">
                    <img src="{{ asset('resources/views/logo2.png') }}">
                </div>
            <div class="header-login">
                <label link="#">ログイン</label>
                <label link="#">新規登録</label>
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
            <div class="container">
            <div class="top-images">

            </div>
            <div class="top-page-content">
                <div class="left-content">
                    <div class="content-introduction">
                        <p>このアプリは〜...(この文は考える)</p>
                    </div>
                    <div class="top-page-search">
                        <div class="top-search-form">
                            <label>キーワードで検索</label>
                            <input type="search">
                        </div>
                        <div class="top-search-form">
                            <label>地名で検索</label>
                            <input type="search" value="">
                            <input type="search" value="">
                        </div>
                        <div class="top-search-form">
                            <label>カテゴリーで検索</label>
                            <div>
                                <select>
                                    <option value="spot">スポット</option>
                                    <option value="gourmet">グルメ</option>
                                </select>
                                <select>
                                    <option value="anyone">誰でも！</option>
                                    <option value="family">ファミリー向け</option>
                                    <option value="family">一人でも</option>
                                </select>
                            </div>
                        </div>
                        <div class="top-search-form">
                            <label>タグで検索</label>
                            <input type="search" value="">
                            <input type="search" value="">
                        </div>
                        <input type="submit" value="検索する">
                    </div>
                </div>
                <div class="right-content">
                    <div class="content-others">
                        <div class="content-others-title">
                            <h4>他の人が見ています</h4>
                        </div>
                        <div class="content-others-list">
                            <img="">
                            <div class="content-about">

                            </div>
                        </div>
                        <div class="content-others-list">
                            <img="">
                            <div class="content-about">

                            </div>
                        </div>
                        <div class="content-others-list">
                            <img="">
                            <div class="content-about">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
        @include('parts/footer')
        </footer>
    </body>
</html>
