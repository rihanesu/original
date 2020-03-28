@extends('layouts.admin')
@section('title', '投稿ページ')

@section('content')
    <div　class="container">
        <div class="row justify-content-center col-md-12 mx-auto">
            <div class="page-title col-md-12 col text-center mb-5">
                <h1>投稿ページ</h1>
            </div>
            <form>
                <div class="post-create">
                    <div>
                        <label>タイトル *　：</label>
                        <input type="text" size="60">
                    </div>
                    <div>
                        <label>都道府県 *　：</label>
                        <input type="text" size="60">
                    </div>
                    <div>
                        <label>市区町村 *　：</label>
                        <input type="text" size="60">
                    </div>
                    <div>
                        <label>カテゴリー *：</label>
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
                    <div>
                        <label>タグ  　 　　：</label>
                        <input type="text" size="29">
                        <input type="text" size="29">
                    </div>
                    <div>
                        <label>本文 *　　　：<textarea cols="59" rows="2"></textarea></label>

                    </div>
                    <div>
                        <label>画像　   　　：</label>
                        <input type="file">
                    </div>
                    <div class="post-note col text-center">
                        <p>* の印がついているものは、入力が必須となります。</p>
                    </div>
                    <div class="post-button col text-center mt-5">
                        <input type="submit" value="投稿する">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
