<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'doctors';
    public $timestamps = true;
    protected $fillable = array('governorate','name','password', 'speciality', 'age', 'phone', 'gender');

}
