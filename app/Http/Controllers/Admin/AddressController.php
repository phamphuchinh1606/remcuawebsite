<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Curl;

class AddressController extends Controller
{
    protected $countryUrl = 'https://ezcmd.com/apps/ajax_apps/get_countries?term=';
    protected $provinceUrl = 'https://ezcmd.com/apps/ajax_apps/get_sd1/VN?term=';
//    protected $districtUrl = 'https://ezcmd.com/apps/ajax_apps/get_sd2/VN/1594446?term=';
    protected $districtUrl = 'https://ezcmd.com/apps/ajax_apps/get_sd2/VN/%s?term=';
    public function init(){
        //Url get country
//        $response = Curl::to($this->districtUrl)->get();
//        $countries = json_decode($response);
//        foreach ($countries as $country){
//            $countryCode = $country->country_code;
//            $countryName = $country->country_name;
//            $label = $country->label;
//            $value = $country->value;
//        }
//        dd('vao');
        //Load Province
        $response = Curl::to($this->provinceUrl)->get();
        $provinces = json_decode($response);
        $countryCode = "VN";
        dd($provinces);
        foreach ($provinces as $province){
            $provinceDb = $this->addressService->createProvince($province->id, $province->label, $province->lat, $province->lon, $province->poi_name,$countryCode);
            $provinceId = $provinceDb->id;

            //Load district
            $urlDistrict = sprintf($this->districtUrl,$province->id);
            $responseDistrict = Curl::to($urlDistrict)->get();
            $districts = json_decode($responseDistrict);
            foreach ($districts as $district){
                $this->addressService->createDistrict($district->id, $district->label, $district->lat, $district->lon, $district->poi_name,$province->id);
            }
        }
    }
}
