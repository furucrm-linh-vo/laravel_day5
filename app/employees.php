<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public function titles()
    {
        return $this->hasOne('App\titles');
    }

    public function salaries()
    {
        return $this->hasMany('App\salaries');
    }

    public function departments()
    {
        return $this->belongsToMany('App\departments','managers','emp_id','department_id');
    }

    public function managers()
    {
        return $this->hasOne('App\managers');
    }
}
