<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector_type extends Model
{
    protected $table= 'sectors_types';
    
    public function counters()
    {
        return $this->hasMany('App\Counter');

    }
}
