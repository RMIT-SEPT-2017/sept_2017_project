<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function cust()
    {
        return $this->hasOne('User');
    }
    public function emp()
    {
        return $this->hasOne('Employee');
    }
}
