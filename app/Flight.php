<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    public function category()
    {
        return $this->hasOne('App\Category', 'id');
    }
}
