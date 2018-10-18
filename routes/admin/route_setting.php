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

Route::get('/setting/banner','SettingController@bannerList')->name('setting.banner');
Route::post('setting/banner/create','SettingController@bannerCreate')->name('setting.banner.create');
Route::delete('setting/banner/delete/{id}','SettingController@bannerDestroy')->name('setting.banner.delete');

//Setting Top Banner
Route::get('/setting/top-banner','SettingController@topBannerList')->name('setting.topBanner');
Route::post('/setting/top-banner/create','SettingController@topBannerCreate')->name('setting.topBanner.create');
Route::delete('setting/top-banner/delete/{id}','SettingController@topBannerDestroy')->name('setting.topBanner.delete');

//Setting Tags
Route::get('/setting/tag','SettingController@tagList')->name('setting.tag');
Route::post('/setting/tag/create','SettingController@tagCreate')->name('setting.tag.create');
Route::delete('setting/tag/delete/{id}','SettingController@tagDestroy')->name('setting.tag.delete');

//Setting App Info
Route::get('/setting/app-info','SettingController@appInfo')->name('setting.app');
Route::post('/setting/app-info/update','SettingController@updateAppInfo')->name('setting.app.update');


