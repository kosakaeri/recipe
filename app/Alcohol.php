<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alcohol extends Model
{
    public static $rules = array(
        'alcohol' => 'required',
        );
}
