<?php

namespace App\Common;

use Storage;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;

class AppCommon{
    public static function createFromFormat($value, $format = "m/d/Y"){
        return Carbon::createFromFormat($format,$value);
    }

    public static function dateFormat($value, $format = "d-M-Y H:i"){
        return Carbon::parse($value)->addHours(7)->format($format);
    }

    public static function getDayOnDate($value){
        return Carbon::parse($value)->addHours(7)->day;
    }
    public static function getMonthOnDate($value){
        return Carbon::parse($value)->addHours(7)->shortEnglishMonth;
    }

    public static function dateFormatText($value, $format = "d-M-Y H:i"){
        $today = date("d-M-Y");
        $another_date = Carbon::parse($value)->addHours(7);

        $days = (strtotime($today) - strtotime($another_date->format('d-M-Y')))/ (60 * 60 * 24);

        $dateMain = $another_date->format($format);
        if ($days == 0) {
            $date = "Today".' <span>'.$another_date->format('H:i').'</span>';
        } else if($days == 1){
            $date = "Yesterday".' <span>'.$another_date->format('H:i').'</span>';
        } else {
            $date = $dateMain;
        }
        return $date;
    }

    public static function showTextDot($value, $lengthText){
        return str_limit($value,$lengthText,'....');
    }

    public static function getIsPublic($value){
        $isPublic = Constant::$PUBLIC_FLG_ON;
        if($value == "Off" || $value == null){
            $isPublic = Constant::$PUBLIC_FLG_OFF;
        }
        return $isPublic;
    }

    public static function namePublicProductType($statusValue){
        $publicName = "";
        switch ($statusValue){
            case Constant::$PUBLIC_FLG_ON:
                $publicName = Constant::$PUBLIC_FLG_ON_NAME;
                break;
            case Constant::$PUBLIC_FLG_OFF:
                $publicName = Constant::$PUBLIC_FLG_OFF_NAME;
                break;
        }
        return $publicName;
    }

    public static function classPublicProductType($statusValue){
        $className = "";
        switch ($statusValue){
            case Constant::$PUBLIC_FLG_ON:
                $className = 'badge-success';
                break;
            case Constant::$PUBLIC_FLG_OFF:
                $className = 'badge-dark';
                break;
        }
        return $className;
    }

    public static function nameStatusIsRead($statusValue){
        $statusReadName = "";
        switch ($statusValue){
            case Constant::$STATUS_READ_OFF:
                $statusReadName = Constant::$STATUS_READ_OFF_NAME;
                break;
            case Constant::$STATUS_READ_ON:
                $statusReadName = Constant::$STATUS_READ_ON_NAME;
                break;
        }
        return $statusReadName;
    }

    public static function classStatusIsRead($statusValue){
        $className = "";
        switch ($statusValue){
            case Constant::$STATUS_READ_OFF:
                $className = 'badge-danger';
                break;
            case Constant::$STATUS_READ_ON:
                $className = 'badge-dark';
                break;
        }
        return $className;
    }

    public static function moveImage(UploadedFile $file, $pathFolder){
         if(isset($file)){
             $filename = time().'_'.$file->getClientOriginalName();
             $fileNameUpload = Storage::putFileAs($pathFolder, $file, $filename);
             return $fileNameUpload;
         }
         return "";
    }

    public static function moveImageProduct(UploadedFile $file, $productId){
        return AppCommon::moveImage($file, Constant::$PATH_FOLDER_UPLOAD_PRODUCT.'/'.$productId);
    }

    public static function deleteImage($imageName){
        if(Storage::exists($imageName)){
            Storage::delete($imageName);
        }
    }

    public static function formatMoney($value){
        return number_format($value);
    }
}
