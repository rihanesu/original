@extends('layouts.admin')
@section('title', '投稿ページ')

@section('content')
    <div　class="container">
        <div class="row justify-content-center col-md-12 mx-auto">
            <div class="page-title col-md-12 col text-center">
                <h1 class="mb-5">投稿ページ</h1>
                <form action="{{ action('Admin\PostController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-3" for="title">タイトル</label>
                        <input type="text" class="form-control col-md-8" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="prefecture">都道府県</label>
                        <select type="text" class="form-control col-md-5" name="prefecture" value="{{ old('title') }}">
                            @include('parts/area_search')
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="category">カテゴリー</label>
                        <select class="form-control col-md-5" name="category" value="{{ old('category') }}">
                            <option value="スポット">スポット</option>
                            <option value="グルメ">グルメ</option>
                            <option value="誰でも">誰でも</option>
                            <option value="ファミリー向け">ファミリー向け</option>
                            <option value="一人でも">一人でも</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="body">本文</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="title">画像</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="col text-center mt-5">
                        <input type="submit" value="投稿する">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
