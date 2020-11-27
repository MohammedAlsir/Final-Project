<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function counter()
    {
        return $this->belongsTo('App\Counter');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
