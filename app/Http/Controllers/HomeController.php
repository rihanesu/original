<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *  最初の閲覧ページをhomeにするため、以下コメント化
     *  public function __construct()
     *  {
     *  $this->middleware('auth');
     *  }
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add()
    {
        return view('home');
    }

    public function home()
    {
        $posts = Post::orderBy('id', 'desc')->take(4)->get();

        return view('home', ['posts' => $posts]);
    }

}
