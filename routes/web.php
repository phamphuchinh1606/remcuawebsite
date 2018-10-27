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
//
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login-admin','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login-admin','Auth\LoginController@login')->name('admin.login');
    Route::get('/logout-admin','Auth\LoginController@logout')->name('admin.logout');
});




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
