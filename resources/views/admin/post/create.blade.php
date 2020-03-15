@extends('layouts.admin')
@section('title', '投稿ページ')

@section('content')
  <div　class="container">
    <div class="page-title">
      <h1>投稿ページ</h1>
    </div>
    <form>
      <label>タイトル</label>
        <div>
          <input type="text">
        </div>
        <label>都道府県</label>
        <div>
          <input type="text">
        </div>
        <label>市区町村<label>
          <div>
            <input type="text">
          </div>
        <label>カテゴリー</label>
          <div>
            <select>
              <option value="spot">スポット</option>
              <option value="gourmet">グルメ</option>
            </select>
            <select>
              <option value="anyone">誰でも！</option>
              <option value="family">ファミリー向け</option>
              <option value="family">一人でも</option>
            </select>
          </div>
        <label>タグ</label>
          <div>
            <input type="text">
            <input type="text">
          </div>
        <label>本文</label>
          <div>
            <textarea>
            </textarea>
          </div>
        <label>画像</label>
          <div>
            <input type="file">
          </div>
        <input type="submit" value="投稿する">
    </form>
  </div>
@endsection
