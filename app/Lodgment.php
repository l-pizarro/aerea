<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lodgment extends Model
{
    protected $fillable = [
        'name',
        'address',
        'type'
    ];


    /* Relationships */

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function rooms() {
        return $this->hasMany('App\Room');
    }

    public function packages() {
        return $this->hasMany('App\Package');
    }
}
