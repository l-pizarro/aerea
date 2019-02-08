<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleReservation extends Model
{
    protected $fillable = [
        'code',
        'start_at',
        'end_at'
    ];


    /* Relationships */

    public function vehicle() {
        return $this->belongsTo('App\Vehicle');
    }

    public function buyOrder() {
        return $this->hasOne('App\BuyOrder');
    }
}
