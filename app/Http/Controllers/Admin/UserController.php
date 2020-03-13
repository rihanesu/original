<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {
      return view ('admin.user.mypage');
    }

    public function mypage()
    {
      return view ('admin.user.mypage');
    }

    public function mypost()
    {
      return view ('admin.user.mypost');
    }
}
