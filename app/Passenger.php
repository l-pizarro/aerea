<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'is_child',
        'birthdate',
        'document_id',
        'check_in'
    ];


    /* Relationships */

    public function seatReservation() {
        return $this->belongsTo('App\SeatReservation');
    }
}
