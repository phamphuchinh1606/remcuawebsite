<?php

namespace App\Common;

use Storage;
use Illuminate\Http\UploadedFile;

class ImageCommon{

    public static function moveImageLogo(UploadedFile $file){
        if(isset($file)){
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('/images'),$filename);
            return '/images/'.$filename;
        }
        return "";
    }

    public static function deleteImageLogo($fileNameLogo){
        $pathFile = public_path(). $fileNameLogo;
        if(file_exists($pathFile)){
            unlink($pathFile);
        }
    }
}
