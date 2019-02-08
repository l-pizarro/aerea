<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomReservation extends Model
{
    protected $fillable = [
        'code',
        'start_at',
        'end_at'
    ];


    /* Relationships */

    public function room() {
        return $this->belongsTo('App\Room');
    }

    public function buyOrder() {
        return $this->hasOne('App\BuyOrder');
    }
}
