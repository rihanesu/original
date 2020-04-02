<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');
    protected $table = 'post';

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        'prefecture' => 'required',
        'category' => 'required',
    );
}
