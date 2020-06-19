<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $guarded = ['id'];

    public function cityName()
    {
        return $this->belongsTo('App\City', 'community_city');
    }
}
