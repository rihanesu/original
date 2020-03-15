@extends('layouts.admin')
@section('title', '自分の投稿')

@section('content')
  <div　class="container">
    <div class="page-title">
      <h1>タイトル</h1>
    </div>
    <div class="image-area">
      <div class="image">
        <img src="">
      </div>
    </div>
    <div class="information-area">
      <div class="information">
        <label>都道府県</label>
          <input type="submit" value=" ">
        <br>
        <label>市区町村</label>
          <input type="submit" value=" ">
        <br>
        <label>カテゴリー</label>
          <input type="submit" value=" ">
          <input type="submit" value=" ">
        <br>
        <label>タグ</label>
          <input type="submit" value=" ">
          <input type="submit" value=" ">
      </div>
    </div>
    <div class="text-area">

    </div>
    <div class="">
      <label>閲覧数</label>
        <div>

        </div>
      <label>お気に入り数</label>
        <div>

        </div>
    </div>
    <div class="button-area">
      <input type="submit" value="削除">
      <input type="submit" value="コメント">
    </div>


  </div>
@endsection
