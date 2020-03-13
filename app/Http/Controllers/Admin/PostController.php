<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add()
    {
      return view ('admin.post.create');
    }

    public function create()
    {
      return view ('admin.post.create');
    }

    public function comment()
    {
      return view ('admin.post.comment');
    }

    public function details()
    {
      return view ('admin.post.details');
    }
}
