<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'price',
        'capacity'
    ];


    /* Relationships */

    public function rental() {
        return $this->belongsTo('App\Rental');
    }

    public function vechicleReservations() {
        return $this->hasMany('App\VehicleReservation');
    }
}
