<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/brand-ambassador', 'BrandAmbassadorController@register')->name('ba_get');
Route::get('/community', 'CommunityController@register')->name('comm_get');
Route::post('/save/ba', 'BrandAmbassadorController@save')->name('ba_post');
Route::post('/save/comm', 'CommunityController@save')->name('comm_post');

Route::get('/xls/ba', 'BrandAmbassadorController@toExcel')->name('baToExcel');