<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCity($provinceId)
    {
        return City::where('province_id', $provinceId)->get();
    }
}
