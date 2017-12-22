<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    function orderRequest ()
    {
        return $this->hasMany(orderRequest::class );
    }
    //
}
