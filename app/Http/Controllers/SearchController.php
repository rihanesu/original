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

        $posts = Post::where('title', $cond_title)
        ->orWhere('prefecture', $cond_prefecture)
        ->orWhere('category', $cond_category)->get();

        return view('search', ['posts' => $posts, 'cond_title' => $cond_title, 'cond_prefecture' => $cond_prefecture, 'cond_category' => $cond_category]);
    }
}
