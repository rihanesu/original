@extends('layouts.admin')
@section('title', '自分の投稿')

@section('content')
    <div　class="container">
        <div class="row" style="height: 500px;">
            <div class="post-details col-md-12 col text-center">
                <form action="{{ action('Admin\UserController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-3" for="title">タイトル</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="title" value="{{ $post_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="prefecture">都道府県</label>
                        <div class="col-md-7">
                            <select type="text" class="form-control" name="prefecture" value="{{ $post_form->prefecture }}">
                                @include('parts/area_search')
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="category">カテゴリー</label>
                        <div class="col-md-7">
                            <select type="text" class="form-control" name="category" value="{{ $post_form->category}}">
                                <option value="スポット"/>スポット</option>
                                <option value="グルメ">グルメ</option>
                                <option value="誰でも">誰でも</option>
                                <option value="ファミリー向け">ファミリー向け</option>
                                <option value="一人でも">一人でも</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="body">本文</label>
                        <div class="col-md-7">
                            <textarea class="form-control" name="body" rows="3">{{ $post_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="image">画像</label>
                        <div class="col-md-5">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 mt-5">
                            <input type="hidden" name="id" value="{{ $post_form->id }}">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary">更新する</button>
                        </div>
                    </div>
                </form>
                <div class="float-right col-md-5 mt-5">
                    @include('parts/delete')
                </div>
            </div>
        </div>
    </div>
@endsection
