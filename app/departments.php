<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    public function employees()
    {
        return $this->belongsToMany('App\employees','managers','department_id','emp_id');
    }
}
