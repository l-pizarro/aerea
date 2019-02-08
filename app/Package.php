<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'type',
        'discount',
        'amount',
        'start_at',
        'end_at'
    ];


    /* Relationships */

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function rental() {
        return $this->belongsTo('App\Rental');
    }

    public function lodgment() {
        return $this->belongsTo('App\Lodgment');
    }
}
