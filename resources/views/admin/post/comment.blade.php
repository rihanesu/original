@extends('layouts.admin')
@section('title', 'コメントページ')

@section('content')
<div class="container mx-auto">
    <div class="row">
        <div class="comment-page col-md-12">
            <div class="my-comment col text-center mb-5">
                <div class="page-title mb-4 mt-5">
                    <h4>のコメントページ</h4>
                </div>
                <div class="comment">
                    <div class="comment-area">
                        <textarea rows="3" cols="60">
                        </textarea>
                    </div>
                    <input type="submit" value="コメントする" class="mt-3">
                </div>
            </div>
            <div class="comment-log col text-center col-md-6 mx-auto">
                <div class="comment-log-title mb-5">
                <h4>のコメント</h4>
                </div>
                <div class="overflow-auto" style="height:300px">
                    <div class="comment-log-area text-left">
                        <div class="comment-log-list">
                            <div class="comment-name">
                                <p>さん　のコメント</p>
                            </div>
                            <div class="comment-about">
                                <p>コメントが入ります</p>
                            </div>
                        </div>
                        <hr>
                        <div class="comment-log-list text-left">
                            <div class="comment-name">
                                <p>さん　のコメント</p>
                            </div>
                            <div class="comment-about">
                                <p>コメントが入ります</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
