@extends('layouts.admin')
@section('title', '投稿内容詳細')

@section('content')
    <div　class="container">
        <div class="row">
            <form action="Admin\PostController@details" method="get" enctype="multipart/form-data" class="col-md-12 mx-auto">
                <div class="col text-center">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <h2 class="col-md-10 mx-auto">{{ $post_form->title }}</h2>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 ml-5">
                            @if ($post_form->image_path)
                                <img src="{{ asset('storage/image/' . $post_form->image_path) }}" class="col-md-10">
                            @else
                                <div class="col-md-4 mx-auto">
                                    @include('parts/no_image')
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <div>
                                <label class="col-md-2">都道府県　：</label>
                                <label class="col-md-2">{{ $post_form->prefecture }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label class="col-md-2">カテゴリー：</label>
                            <label class="col-md-2">{{ $post_form->category }}</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label class="col-md-8">{{ $post_form->body }}</label>
                        </div>
                    </div>
                </div>
            </from>
        </div>
    </div>
@endsection
