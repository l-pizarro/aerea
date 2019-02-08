<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyOrder extends Model
{
    protected $fillable = [
        'code',
        'type',
        'total_price',
        'payment',
        'detail'
    ];


    /* Relationships */

    public function client() {
        return $this->belongsTo('App\Client');
    }

    public function flights() {
        return $this->hasMany('App\Flight');
    }

    public function seatResevation() {
        return $this->belongsTo('App\SeatReservation');
    }

    public function roomReservation() {
        return $this->belongsTo('App\RoomReservation');
    }

    public function vechicleReservation() {
        return $this->belongsTo('App\VechicleReservation');
    }
}
