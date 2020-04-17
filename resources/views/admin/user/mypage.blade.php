@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div　class="container">
        <div class="mypage col text-center mx-auto col-md-8">
            <div class="page-title mb-5">
                <h1>{{ Auth::user()->nickname }}さんのマイページ</h1>
            </div>
            <form action="{{ action('Admin\UserController@mypage') }}" method="get">
                <div class="post-history-title mb-5">
                    <h3>投稿履歴</h3>
                </div>
                <div class="bg-light">
                <br>
                    <div class="overflow-auto" style="height:500px">
                        @foreach ($posts as $post)
                            <div class="col-md-12 row">
                                @if ($post->image_path)
                                    <img src="{{ $post->image_path }}" class="col-md-4">
                                @else
                                    <div class="col-md-4">
                                        <img src="{{ asset('image/no_image.png') }}">
                                    </div>
                                @endif
                                <div class="content-about col-md-8 col text-left">
                                    <label>タイトル：{{ $post->title }}</label><br>
                                    <label>県：{{ $post->prefecture }}</label><br>
                                    <label>カテゴリー：{{ $post->category }}</label><br>
                                    <label>本文：{{ $post->body }}</label>
                                    <div>
                                        <a href="{{ action('Admin\UserController@mypost', ['id' => $post->id]) }}" role="button" class="btn btn-primary btn-sm">編集</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </form>
            <br>
            <div class="mypage-profile">
                <div class="mypage-profile-title mb-5">
                    <h3>{{ Auth::user()->nickname }}さんのプロフィール</h3>
                </div>
                <div class="mypage-profile-form">
                    <div class="profile-area">
                        <p>名前　　　　　：<input type="text" size="60" value="{{ Auth::user()->name }}" readonly></p>
                        <p>年齢　　　　　：<input type="text" size="60" value="{{ Auth::user()->age }}" readonly></p>
                        <p>性別　　　　　：<input type="text" size="60" value="{{ Auth::user()->gender }}" readonly></p>
                        <p>メールアドレス：<input type="text" size="60" value="{{ Auth::user()->email }}" readonly></p>
                        <p>パスワード　　：<input type="text" size="60" value="ここでは非表示になります" readonly></p>
                        <p>ニックネーム　：<input type="text" size="60" value="{{ Auth::user()->nickname }}" readonly></p>
                        <p class="nickname_about">※ニックネームはこのサイト上で表示される、あなたの名前です</p>
                    </div>
                    <div>
                        <a href="{{ action('Admin\ProfileController@edit', ['id' => Auth::user()->id]) }}" role="button" class="btn btn-primary">再設定をする</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
