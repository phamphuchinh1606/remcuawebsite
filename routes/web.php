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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin','Admin\HomeController@index');



Route::group(['prefix' => 'galahad/addressing'], function () {
    Route::get('/{country}/administrative-areas', [
        'as' => 'galahad.addressing.administrative-areas',
        'uses' => '\\Galahad\\LaravelAddressing\\Controller@getAdministrativeAreas',
    ]);
    Route::get('/{country}/{administrativeArea}/cities', [
        'as' => 'galahad.addressing.cities',
        'uses' => '\\Galahad\\LaravelAddressing\\Controller@getCities',
    ]);
    Route::get('/countries', [
        'as' => 'galahad.addressing.countries',
        'uses' => '\\Galahad\\LaravelAddressing\\Controller@getCountries',
    ]);
});