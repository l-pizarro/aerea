<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    protected $fillable = [
        'code',
        'capacity'
    ];


    /* Relationships */

    public function seats() {
        return $this->hasMany('App\Seat');
    }

    public function flights() {
        return $this->hasMany('App\Flight');
    }
}
