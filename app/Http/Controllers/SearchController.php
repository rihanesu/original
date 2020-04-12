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
        $cond_prefecture = $request->cond_prefecture;
        $cond_category = $request->cond_category;

        $query = Post::query();
        if ($cond_title != '') {
            $query->where('title', 'LIKE', "%{$cond_title}%");
        }
        if ($cond_prefecture != '') {
            $query->where('prefecture', $cond_prefecture);
        }
        if ($cond_category != '') {
            $query->where('category', $cond_category);
        }
        $posts = $query->get();

        return view('search', ['posts' => $posts, 'cond_title' => $cond_title, 'cond_prefecture' => $cond_prefecture, 'cond_category' => $cond_category]);
    }
}
