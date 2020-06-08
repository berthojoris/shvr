<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandAmbassador extends Model
{
    protected $guarded = ['id'];

    public function provinceName()
    {
        return $this->belongsTo('App\Province', 'id');
    }

    public function cityName()
    {
        return $this->belongsTo('App\City', 'id');
    }
}
