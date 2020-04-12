@extends('layouts.admin')
@section('title', '検索ページ')

@section('content')
<div　class="container">
    <div class="">
        <h1>検索ページ</h1>
    </div>
    <div class="search-content row mx-auto">
        <div class="left-content col-md-6 ml-4">
            <div class="search-now mb-5">
                <div class="left-content-title col text-center mb-4">
                    <h3>現在の検索</h3>
                </div>
                <div class="search-now-box">
                    <p>キーワード：{{ ($cond_title) }}</p>
                    <p>県名　　　：{{ ($cond_prefecture) }}</p>
                    <p>カテゴリー：{{ ($cond_category) }}</p>
                </div>
            </div>
            <div class="search">
                <div class="search-form">
                    @include('parts/search')
                </div>
            </div>
        </div>
        <div class="right-content col-md-6 row">
            <div class="right-content-title col text-center mb-4">
                <h3>検索結果</h3>
            </div>
            <div class="search-result overflow-auto" style="height:400px">
                @foreach ($posts as $post)
                    <div class="search-result-list col-md-12 row">
                        @if ($post->image_path)
                            <img src="{{ asset('image/top-image1.jpg') }}" class="col-md-4">
                        @else
                            <div class="col-md-4">
                                @include('parts/no_image')
                            </div>
                        @endif
                        <div class="search-about col-md-8">
                            <label>{{ ($post->title) }}</label><br>
                            <label>{{ ($post->prefecture) }}</label><br>
                            <label>{{ ($post->category) }}</label><br>
                            <a href="{{ action('Admin\PostController@details', ['id' => $post->id]) }}">見に行く</a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
