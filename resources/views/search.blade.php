@extends('layouts.admin')
@section('title', '検索ページ')

@section('content')
<div　class="container">
    <div class="search-content row mx-auto">
        <div class="left-content col-md-6 ml-4">
            <div class="search-now mb-5">
                <div class="left-content-title col text-center mb-5">
                    <h3>現在の検索</h3>
                </div>
                <div class="search-now-box">
                    <p>キーワード：<input type="text" size="60"></p>
                    <p>地名　　　：<input type="text" size="60"></p>
                    <p>カテゴリー：<input type="text" size="60"></p>
                    <p>タグ　　　：<input type="text" size="60"></p>
                </div>
            </div>
            <div class="search">
                <div class="search-form">
                    @include('parts/search')
                </div>
            </div>
        </div>
        <div class="right-content col-md-6 row">
            <div class="right-content-title col text-center">
                <h3>検索結果</h3>
            </div>
            <div class="search-result overflow-auto" style="height:500px">
                <div class="search-result-list col-md-12 row">
                    <img src="{{ asset('image/top-image1.jpg') }}" class="col-md-4">
                    <div class="search-about col-md-8">
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
</div>

@endsection
