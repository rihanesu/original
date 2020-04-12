<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;

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
        $post->user_id = $request->user()->id;

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $post->image_path = basename($path);
        } else {
            $post->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $post->fill($form)->save();

        return redirect('admin/user/mypage');
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

    public function details(Request $request)
    {
        $post = Post::find($request->id);
        if (empty($post)) {
            abort(404);
        }
        return view ('admin/post/details', ['post_form' => $post]);
    }

    public function comment(Request $request)
    {
        $comment = new Comment;
        $form = $request->all();

        $comments = Comment::get();

        return back('admin/post/details', ['comments' => $comments])->withInput();
    }

}
