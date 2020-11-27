<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    public function counter()
    {
        return $this->belongsTo('App\Counter');
    }

    public function notice_type()
    {
        return $this->belongsTo('App\Notice_type');
    }
}
