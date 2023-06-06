<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{

    protected $table = 'follow_ups';
    public $timestamps = true;
    protected $fillable = array('patient_id', 'name', 'reply', 'file','message');

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

}
