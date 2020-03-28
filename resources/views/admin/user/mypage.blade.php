@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div　class="container">
        <div class="mypage col text-center mx-auto col-md-8">
            <div class="page-title mb-5">
                <h3>さんのマイページ</h3>
            </div>
            <div class="post-history">
                <div class="post-history-title mb-5">
                    <h5>投稿履歴</h5>
                </div>
                <div class="overflow-auto" style="height:500px">
                    <div class="post-history-list col-md-12 row">
                        <img src="{{ asset('image/top-image1.jpg') }}" class="col-md-4">
                        <div class="content-about col-md-8 col text-left">
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
            <hr>
            <div class="my-favorite">
                <div class="my-favorite-title mb-5">
                    <h5>お気に入り</h5>
                </div>
                <div class="overflow-auto" style="height:500px">
                    <div class="my-favorite-list col-md-12 row">
                        <img src="{{ asset('image/top-image1.jpg') }}" class="col-md-4">
                        <div class="content-about col-md-8 col text-left">
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
            <hr>
            <div class="mypage-profile">
                <div class="mypage-profile-title mb-5">
                    <h5>さんのプロフィール</h5>
                </div>
                <div class="mypage-profile-form">
                    <div class="profile-area">
                        <p>名前　　　　　：<input type="text" size="60" value="{{ Auth::user()->name }}" readonly></p>
                        <p>年齢　　　　　：<input type="text" size="60" value="{{ Auth::user()->age }}" readonly></p>
                        <p>性別　　　　　：<input type="text" size="60" value="{{ Auth::user()->gender }}" readonly></p>
                        <p>メールアドレス：<input type="text" size="60" value="{{ Auth::user()->email }}" readonly></p>
                        <p>パスワード　　：<input type="text" size="60" value="{{ Auth::user()->password }}" readonly></p>
                        <p>ニックネーム　：<input type="text" size="60" value="{{ Auth::user()->nickname }}" readonly></p>
                        <p class="nickname-about">※ニックネームはこのサイト上で表示される、あなたの名前です</p>
                    </div>
                    <input type="submit" value="編集する">
                </div>
            </div>
        </div>
    </div>
@endsection
