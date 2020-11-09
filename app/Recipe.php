<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public static $rules = array(
        'title' => 'required',
        // 'alcohol' => 'required',
        // 'flag' => 'required',
    );
}
