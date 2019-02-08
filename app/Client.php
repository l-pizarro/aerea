<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'document_id',
        'email'
    ];


    /* Relationships */

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function buyOrders() {
        return $this->hasMany('App\BuyOrder');
    }
}
