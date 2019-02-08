<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'country'
    ];

    
    /* Relationships */

    public function airports() {
        return $this->hasMany('App\Airport');
    }

    public function rentals() {
        return $this->hasMany('App\Rental');
    }

    public function lodgments() {
        return $this->hasMany('App\Lodgment');
    }

    public function packages() {
        return $this->hasMany('App\Package');
    }
}
