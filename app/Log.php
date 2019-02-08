<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'code',
        'operation'
    ];


    /* Relationships */

    public function user() {
        return $this->belongsTo('App\User');
    }
}
