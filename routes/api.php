<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cities', 'CityController@getCities');
Route::get('/city/{provinceId}', 'CityController@getCity');
Route::get('/province', 'ProvinceController@getAllProvince');
