<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = [
        'name',
        'address'
    ];


    /* Relationships */

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function flights() {
        return $this->hasMany('App\Flight');
    }
}
