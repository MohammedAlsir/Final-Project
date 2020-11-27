<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    public function invoices()
    {
        return $this->hasMany('App\Invoice');

    }

    public function notices()
    {
        return $this->hasMany('App\Notice');

    }

    public function sector_type()
    {
        return $this->belongsTo('App\Sector_type');
    }
}
