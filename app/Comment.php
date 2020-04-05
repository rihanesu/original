<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public static $rules = array(
        'comment' => 'required',
        'comment_user' => 'required',
    );
}
