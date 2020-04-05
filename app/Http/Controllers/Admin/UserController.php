<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Users_info;

class UserController extends Controller
{
    public function add()
    {
      return view('admin/user/mypage');
    }

    public function mypage()
    {
        $posts = Post::get();

        return view('admin/user/mypage',['posts' => $posts]);
    }

    public function mypost(Request $request)
    {
        $post = Post::find($request->id);
        if (empty($post)) {
            abort(404);
        }
        return view('admin/user/mypost', ['post_form' => $post]);
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

    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();

        return redirect('admin/user/mypage');
    }
}
