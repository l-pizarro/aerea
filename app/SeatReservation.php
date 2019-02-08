<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatReservation extends Model
{
    protected $fillable = [
        'code',
        'start_at',
        'end_at'
    ];


    /* Relationships */

    public function seat() {
        return $this->belongsTo('App\Seat');
    }

    public function passengers() {
        return $this->hasMany('App\Passenger');
    }

    public function buyOrder() {
        return $this->hasOne('App\BuyOrder');
    }
}
