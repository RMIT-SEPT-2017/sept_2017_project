<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function business()
    {
        return $this->hasMany('Business');
    }
}