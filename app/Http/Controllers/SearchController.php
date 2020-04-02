<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function add()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Post::where('title', $cond_title)->get();
        } else {
            echo "該当するキーワードは見つかりませんでした";
            $posts = Post::all();
        }

        $cond_prefecture = $request->cond_prefecture;
        if ($cond_prefecture != '') {
            $posts = Post::where('prefecture', $cond_prefecture)->get();
        } else {
            echo "県名不明";
        }

        $cond_category = $request->cond_category;
        if ($cond_category != '') {
            $posts = Post::where('category', $cond_category)->get();
        } else {
            echo "カテゴリ不明";
        }

        return view('search', ['posts' => $posts, 'cond_title' => $cond_title, 'cond_prefecture' => $cond_prefecture, 'cond_category' => $cond_category]);
    }
}
