<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    function orderRequest ()
    {
        return $this->hasMany(orderRequest::class );
    }
    //
}
