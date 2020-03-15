@extends('layouts.admin')
@section('title', '検索ページ')

@section('content')
<div　class="container">
  <div class="left-content">
    <div class="left-content-title">
      <h2>現在の検索</h2>
    </div>
    <div class="search-now">

    </div>
    <div class="search">
      <div class="search-form">
        <div class="search-title">
          <h4>地名で検索</h4>
        </div>
        <div class=" ">
          <p><label>都道府県<input type="search"></label></p>
        </div>
        <div class=" ">
          <p><label>市区町村<input type="search"></label></p>
        </div>
        <div class=" ">
          <label>カテゴリーで検索</label>
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
          </div>
        <div class=" ">
          <label>タグで検索</label>
            <div>
              <input type="search">
              <input type="search">
            </div>
          </div>
        <input type="submit" value="検索する">
      </div>
    </div>

  <div class="right-content">
    <div class="right-content-title">
      <h2>検索結果</h2>
    </div>
    <div class="search-result">
      

    </div>
  </div>


@endsection
