<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Users_info;

class ProfileController extends Controller
{
    public function add()
    {
      return view ('admin/profile/create');
    }

    public function edit(Request $request)
    {
        $auth = \Auth::user();

        return view('admin/profile/edit', ['auth' => $auth]);
    }

    public function update(Request $request)
    {
        $this->validate($request, User::$rules);
        $auth = User::find($request->id);
        $user_form = $request->all();

        unset($user_form['_token']);

        if(isset($user_form['password'])) {
            $user_form['password'] = \Hash::make($user_form['password']);
        }

        $auth->fill($user_form)->save();

        return redirect('admin/user/mypage');
    }
}
