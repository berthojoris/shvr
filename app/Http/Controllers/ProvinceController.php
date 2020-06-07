<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function getAllProvince()
    {
        return Province::orderBy('id', 'asc')->get();
    }
}
