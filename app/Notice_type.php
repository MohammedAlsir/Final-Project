<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice_type extends Model
{
    public function notices()
    {
        return $this->hasMany('App\Notice');

    }
}
