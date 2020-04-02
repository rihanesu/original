<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_add extends Model
{
    protected $guarded = array('id');

    public static $rules = $array(
        'age' => "required",
        'gender' => "required",
        'nickname' => "required",
    );

}
