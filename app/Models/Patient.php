<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{

    protected $table = 'patients';
    public $timestamps = true;
    protected $fillable = array('name', 'phone','password', 'age', 'gender', 'governorate');

    public function followUps()
    {
        return $this->hasMany('App\Models\FollowUp');
    }

}
