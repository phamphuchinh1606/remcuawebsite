<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\ProductType;

class ProductTypeLogic extends BaseLogic{
    public function getAll(){
        return ProductType::where('is_delete',Constant::$DELETE_FLG_OFF)
                            ->orderBy('id','asc')->get();
    }

    public function getAllNotParent(){
        return ProductType::where('is_delete',Constant::$DELETE_FLG_OFF)
                ->whereNull('parent_id')->get();
    }

    public function getByParentId($productTypeId){
        return ProductType::where('is_delete',Constant::$DELETE_FLG_OFF)
            ->where('parent_id',$productTypeId)->get();
    }

    public function create($productTypeName, $isPublic, $imageIcon = null){
        $productType = new ProductType();
        $productType->product_type_name = $productTypeName;
        $productType->is_public = $isPublic;
        if($imageIcon != null){
            $productType->image_icon = $imageIcon;
        }
        return $productType->save();
    }

    public function createChildren($productTypeId,$productTypeName, $isPublic){
        $productType = new ProductType();
        $productType->product_type_name = $productTypeName;
        $productType->is_public = $isPublic;
        $productType->parent_id = $productTypeId;
        return $productType->save();
    }

    public function update($productTypeId, $productTypeName, $isPublic, $imageIcon = null){
        $productType = ProductType::find($productTypeId);;
        if(isset($productType)){
            $productType->product_type_name = $productTypeName;
            $productType->is_public = $isPublic;
            if($imageIcon != null){
                $productType->image_icon = $imageIcon;
            }
            $productType->save();
        }
    }

    public function findId($productTypeId){
        return ProductType::find($productTypeId);
    }

    public function delete($productTypeId){
        $productType = ProductType::find($productTypeId);;
        if(isset($productType)){
            $productType->is_delete = Constant::$DELETE_FLG_ON;
            $productType->save();
        }
    }
}
