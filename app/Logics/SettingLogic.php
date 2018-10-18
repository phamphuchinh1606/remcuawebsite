<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\SettingBanner;
use App\Models\SettingTopBanner;
use App\Models\SettingTag;
use App\Models\SettingAppInfo;
use App\Models\TableNameDB;

class SettingLogic extends BaseLogic{
    public function getBannerAll(){
        return SettingBanner::all();
    }

    public function createBanner($srcImage){
        $banner = new SettingBanner();
        $banner->src_image = $srcImage;
        $banner->save();
        return $banner;
    }

    public function deleteBanner($bannerId){
        SettingBanner::destroy($bannerId);
    }

    //Start Top Banner
    public function getTopBannerAll(){
        return SettingTopBanner::all();
    }

    public function createTopBanner($srcImage){
        $banner = new SettingTopBanner();
        $banner->src_image = $srcImage;
        $banner->save();
        return $banner;
    }

    public function deleteTopBanner($bannerId){
        SettingTopBanner::destroy($bannerId);
    }
    //End Top Banner

    //Start Tags Key
    public function getTagAll(){
        return SettingTag::all();
    }

    public function getTagByTagType($tagTypeId){
        return SettingTag::join(TableNameDB::$TableProductType.' as productType','productType.id','=','setting_tags.product_type_id')
            ->where('tag_type',$tagTypeId)->orderBy('sort_number','asc')
            ->select('setting_tags.*','productType.product_type_name')->get();
    }

    public function createTag($tagType = 1, $productTypeId, $tagName, $sortNumber){
        $tag = new SettingTag();
        $tag->product_type_id = $productTypeId;
        $tag->tag_type = $tagType;
        $tag->tag_name = $tagName;
        $tag->sort_number = $sortNumber;
        $tag->save();
        return $tag;
    }

    public function deleteTag($tagId){
        SettingTag::destroy($tagId);
    }
    //End Tags Key

    //Start App Info
    public function getAppInfo(){
        return SettingAppInfo::first();
    }

    public function createAppInfo(){
        $appInfo = new SettingAppInfo();
        $appInfo->save();
        return $appInfo;
    }

    public function updateAppInfo($params = []){
        if(isset($params['appId'])){
            $appInfo = SettingAppInfo::find($params['appId']);
            if(isset($appInfo)){
                $appInfo->app_name = $params['appName'];
                $appInfo->app_phone = $params['appPhone'];
                $appInfo->app_fax = $params['appFax'];
                $appInfo->app_email = $params['appEmail'];
                $appInfo->app_facebook = $params['appFacebook'];
                $appInfo->app_address = $params['appAddress'];
                $appInfo->save();
            }
        }
    }
    //End App Info
}
