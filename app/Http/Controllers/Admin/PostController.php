<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function add()
    {
        return view ('admin/post/create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form = $request->all();

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $post->image_path = basename($path);
        } else {
            $post->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $post->fill($form)->save();

        return redirect('admin/post/create');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Post::where('title', $cond_title)->get();
        } else {
            $posts = Post::all();
        }

        return view('admin/user/mypage', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function comment()
    {
        return view ('admin/post/comment');
    }

    public function details()
    {
        $post = Post::find($request->id);
        if (empty($post)) {
            abort(404);
        }
        return view ('admin/post/details', ['post_form' => $post]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = Post::find($request->id);
        $post_form = $request->all();
        if (isset($post_form['image'])) {
            $path = $request->file('image')->store('public/image');
            $post->image_path = basename($path);
            unset($post_form['image']);
        } elseif (isset($request->remove)) {
            $post->image_path = null;
            unset($post_form['remove']);
        }
        unset($post_form['_token']);
        $post->fill($post_form)->save();

        return redirect('admin/user/mypage');
    }
}
