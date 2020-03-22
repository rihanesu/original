@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div　class="container">
        <div class="page-title">
            <h3>さんのマイページ</h3>
        </div>
        <div class="post-history">
            <div class="post-history-title">
                <h5>投稿履歴</h5>
            </div>
            <div class="post-history-list">
                <div class="post-history-image">

                </div>
                <div class="post-history-about">

                </div>
            </div>
        </div>
        <hr>
        <div class="my-favorite">
            <div class="my-favorite-title">
                <h5>お気に入り</h5>
            </div>
            <div class="my-favorite-list">
                <div class="my-favorite-image">

                </div>
                <div class="my-favorite-title">

                </div>
            </div>
        </div>
        <hr>
        <div class="mypage-profile">
            <div class="mypage-profile-title">
                <h5>さんのプロフィール</h5>
            </div>
            <div class="mypage-profile-form">
                <div class="profile-area">
                    <label>性</label>
                    <input type="text" value=" ">
                </div>
                <div class="">
                    <lavel>名</label>
                    <input type="text" value=" ">
                </div>
                <div class="">
                    <label>年齢</label>
                    <input type="text" value=" ">
                </div>
                <div class="">
                    <label>性別</label>
                    <input type="text" value=" ">
                </div>
                <div class="">
                    <label>メールアドレス</label>
                    <input type="text" value=" ">
                </div>
                <div class="">
                    <label>パスワード</label>
                    <input type="text" value=" ">
                </div>
                <div class="">
                    <label>ニックネーム</label>
                    <input type="text" value=" ">
                    <p class="nickname-about">※ニックネームはこのサイト上で表示される、あなたの名前です</p>
                </div>
                <input type="submit" value="編集する">
            </div>
        </div>
    </div>
@endsection
