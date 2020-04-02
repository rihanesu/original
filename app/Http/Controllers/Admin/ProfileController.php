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
        $user = User::find($request->id);
        if (empty($user)) {
            abort(404);
        }

        return view('admin/profile/edit', ['user_form' => $user]);
    }

    public function update(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $user_form = $request->all();
        unset($user_form['_token']);

        $user->fill($user_form)->save();

        return redirect('admin/user/mypage');
    }
}
