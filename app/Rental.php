<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'name',
        'address'
    ];


    /* Relationships */

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function vehicles() {
        return $this->hasMany('App\Vehicle');
    }

    public function packages() {
        return $this->hasMany('App\Package');
    }
}
