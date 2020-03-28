@extends('layouts.admin')
@section('title', '投稿内容詳細')

@section('content')
    <div　class="container">
        <div class="row justify-content-center mx-auto col-md-12">
            <div class="post-details">
                <div class="post-title col text-center mb-5">
                    <h1>タイトル</h1>
                </div>
                <div class="post-top row col-md-12 mb-5">
                    <div class="image-area col-md-6 ml-5">
                        <div class="image">
                            <img src="{{ asset('image/top-image1.jpg') }}">
                        </div>
                    </div>
                    <div class="information-area col-md-5 ml-4">
                        <div class="information">
                            <div>
                                <label>都道府県　：</label>
                                <input type="text" value=" ">
                            </div>
                            <div>
                                <label>市区町村　：</label>
                                <input type="text" value=" ">
                            </div>
                            <div>
                                <label>カテゴリー：</label>
                                <input type="text" value=" ">
                                <input type="text" value=" ">
                            </div>
                            <div>
                                <label>タグ　　　：</label>
                                <input type="text" value=" ">
                                <input type="text" value=" ">
                            </div>
                            <div class="mt-4">
                                <div class="text-area">
                                    <textarea rows="8" cols="54">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-under row col-md-12">
                    <div class="post-counter col-md-8 ml-5">
                        <div class="post-views">
                            <label>閲覧数</label>
                        </div>
                        <div class="post-favorite">
                            <label>お気に入り数</label>
                        </div>
                    </div>
                    <div class="button-area col-md-3 justify-content-around">
                        <input type="submit" value="お気に入りにする">
                        <input type="submit" value="コメントする">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
