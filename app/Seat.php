<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = [
        'code',
        'class',
        'price'
    ];


    /* Relationships */

    public function airplane() {
        return $this->belongsTo('App\Airplane');
    }

    public function seatReservations() {
        return $this->hasMany('App\SeatReservation');
    }
}
