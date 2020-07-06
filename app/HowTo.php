<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HowTo extends Model
{
    public static $rules = array(
        'howto' => 'required',
        );
}
