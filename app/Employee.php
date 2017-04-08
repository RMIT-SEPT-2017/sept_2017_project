<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function booking()
    {
        return $this->hasMany('Booking');
    }
}
