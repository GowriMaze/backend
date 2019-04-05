<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::POST('/City','CityController@store');
Route::GET('/City/{id}','CityController@show');
Route::POST('/City/{id}','CityController@update');
Route::POST('/City/{id}','CityController@destroy');
*/

Route::resource('/City','CityController');
