@extends('layouts.admin')
@section('title', 'コメントページ')

@section('content')
  <div　class="container">
    <div class="page-title">
      <h1>コメントページ</h1>
    </div>
    <div class="comment">
      <div class="comment-area">
        <input type="text">
      </div>
      <input type="submit" value="コメントする">
    </div>
    <div class="comment-log">
      <div class="comment-log-title">
        <h1>〇〇へのコメント</h1>
      </div>
      <div class="comment-log-area">

      </div>
  </div>
@endsection
