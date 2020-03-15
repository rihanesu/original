@extends('layouts.admin')
@section('title', '登録情報の編集')

@section('content')
  <div　class="container">
    <div class="page-title">
      <h1>登録情報の編集</h1>
    </div>
    <div class="profile-area">
      <div class="">
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
        <p class="nickname">※ニックネームはこのサイト上で表示される、あなたの名前です</p>
      </div>
      <input type="submit" value="編集を完了する">
    </div>
@endsection
