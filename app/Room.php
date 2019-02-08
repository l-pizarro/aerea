<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'code',
        'price',
        'capacity'
    ];


    /* Relationships */

    public function lodgment() {
        return $this->belongsTo('App\Lodgment');
    }

    public function roomReservations() {
        return $this->hasMany('App\RoomReservation');
    }
}
