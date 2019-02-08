<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'code',
        'arrival_airport',
        'departure_date',
        'departure_time',
        'arrival_date',
        'arrival_time'
    ];


    /* Relationships */

    public function airport() {
        return $this->belongsTo('App\Airport');
    }

    public function airplane() {
        return $this->belongsTo('App\Airplane');
    }
}
