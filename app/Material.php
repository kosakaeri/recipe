<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public static $rules = array(
        'material' => 'required',
        );
}
