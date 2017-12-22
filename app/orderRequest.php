<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderRequest extends Model
{
    //
    function user ()
    {
        return $this->belongsTo(user::class );
    }
}
