<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use Illuminate\Http\Request;
use Storage;

class ProductService extends BaseService{

    public function getAllLProduct(){
        $listProduct = $this->productLogic->getAllLProduct();
        foreach ($listProduct as $product){
            $product->public_name = AppCommon::namePublicProductType($product->is_public);
            $product->public_class = AppCommon::classPublicProductType($product->is_public);
        }
        return $listProduct;
    }

    public function getProductNews($limit = 8){
        $listProduct = $this->productLogic->getProductNews($limit);
        return $listProduct;
    }

    public function createProduct(Request $request){
        $params = [];
        $params['productName'] = $request->product_name;
        $params['productCode'] = $request->product_code;
        $params['vendorId'] = $request->vendor;
        $params['productTypeId'] = $request->product_type;
        $params['productPrice'] = $request->product_price;
        $params['productCostPrice'] = $request->product_cost_price;
        $params['productComparePrice'] = $request->product_compare_price;
        $params['productSalePercent'] = $request->product_sale_percent;
        $params['isPublic'] = AppCommon::getIsPublic($request->is_public);
        $params['productDescription'] = $request->product_description;
        $params['productContent'] = $request->product_content;
        $product = $this->productLogic->createProduct($params);
        if($product != null){
            $productId = $product->id;
            $productImage = $request->file('product_main_image') ;
            if(isset($productImage)){
                $imageName = AppCommon::moveImageProduct($productImage, $productId);
                $product = $this->productLogic->updateImage($product,$imageName);
            }
            $productImages = $request->product_images;
            if(isset($productImages) && count($productImages) > 0){
               foreach ($productImages as $image){
                   if(isset($image)){
                       $moveImageName = str_replace(Constant::$PATH_FOLDER_UPLOAD_IMAGE_DROP,Constant::$PATH_FOLDER_UPLOAD_PRODUCT.'/'.$productId, $image);
                       Storage::move($image, $moveImageName);
                       $this->productImageLogic->create($productId,$moveImageName);
                   }
               }
            }
        }
        return $product;
    }

    public function updateProduct($productId, Request $request){
        $params = [];
        $params['productName'] = $request->product_name;
        $params['productCode'] = $request->product_code;
        $params['vendorId'] = $request->vendor;
        $params['productTypeId'] = $request->product_type;
        $params['productPrice'] = $request->product_price;
        $params['productCostPrice'] = $request->product_cost_price;
        $params['productComparePrice'] = $request->product_compare_price;
        $params['productSalePercent'] = $request->product_sale_percent;
        $params['isPublic'] = AppCommon::getIsPublic($request->is_public);
        $params['productDescription'] = $request->product_description;
        $params['productContent'] = $request->product_content;
        $productImage = $request->file('product_main_image') ;
        if(isset($productImage)){
            $productDb = $this->productLogic->getProduct($productId);
            if(isset($productDb)){
                AppCommon::deleteImage($productDb->product_image);
            }
            $imageName = AppCommon::moveImageProduct($productImage, $productId);
            $params['productImage'] = $imageName;
        }
        $product = $this->productLogic->updateProduct($productId, $params);
        return $product;
    }

    public function getProductById($productId){
        return $this->productLogic->getProduct($productId);
    }

    public function getInfoProduct($productId){
        $product = $this->productLogic->getProductInfo($productId);
        if(isset($product->id)){
            $product->images = $this->productImageLogic->getListImageByProductId($productId);
        }
        return $product;
    }

    public function getListProductSameType($productId,$productTypeId){
        return $this->productLogic->getListProductSameType($productId,$productTypeId);
    }

    public function getListProductHot($limit = 5){
        return $this->productLogic->getListProductHot($limit);
    }

    public function delete($productId){
        $this->productLogic->delete($productId);
    }

    public function addImage($productId,$image){
        $imageName = AppCommon::moveImageProduct($image, $productId);
        $this->productImageLogic->create($productId,$imageName);
    }

    public function deleteImage($imageId){
        $this->productImageLogic->delete($imageId);
    }

    //Service Guest
    public function getListProductByProductType($productTypeId, $sortBy){
        $products = [];
        if($productTypeId == null){
            $products = $this->getAllLProduct();
        }else{
            $products = $this->productLogic->getListProductByProductType($productTypeId,$sortBy);
        }
        return $products;
    }
}
