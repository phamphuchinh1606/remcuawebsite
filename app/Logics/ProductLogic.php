<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\Product;
use DB;
use App\Models\TableNameDB;

class ProductLogic extends BaseLogic{

    public function getAllLProduct(){
        $listProducts = Db::table(TableNameDB::$TableProduct.' as product')
                            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
                            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
                            ->select('product.*', 'type.product_type_name')
                            ->paginate(20);
        return $listProducts;
    }

    public function getProductNews($limit = 8){
        $listProducts = Db::table(TableNameDB::$TableProduct.' as product')
            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
            ->where('product.is_public',Constant::$PUBLIC_FLG_ON)
            ->orderBy('created_at', 'desc')
            ->select('product.*', 'type.product_type_name')
            ->limit($limit)->get();
        return $listProducts;
    }

    public function getProduct($productId){
        return Product::find($productId);
    }

    public function getProductInfo($productId){
        $product = Db::table(TableNameDB::$TableProduct.' as product')
            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->join(TableNameDB::$TableVendor.' as vendor', 'product.vendor_id' ,'=' ,'vendor.id')
            ->where('product.id', $productId)
            ->select('product.*', 'type.product_type_name', 'vendor.vendor_name')
            ->first();
        return $product;
    }

    public function getListProductSameType($productId,$productTypeId, $limit = 8){
        return Product::where('id','<>',$productId)->where('product_type_id',$productTypeId)->limit($limit)->get();
    }

    public function getListProductHot($limit = 5){
        $products = Product::orderBy('qty_sale_order','desc')->limit($limit)->get();
        return $products;
    }

    public function createProduct($params = []){
        if(count($params) > 0){
            $product = new Product();
            $product->product_name = $params['productName'];
            $product->product_code = $params['productCode'];
            $product->vendor_id = $params['vendorId'];
            $product->product_type_id = $params['productTypeId'];
            $product->product_price = $params['productPrice'];
            if(isset($params['productCostPrice'])){
                $product->product_cost_price = $params['productCostPrice'];
            }
            if(isset($params['productComparePrice'])){
                $product->product_compare_price = $params['productComparePrice'];
            }
            $product->product_sale_percent = $params['productSalePercent'];
            $product->is_public = $params['isPublic'];
            $product->product_qty = 0;
            $product->product_description = $params['productDescription'];
            $product->product_content = $params['productContent'];
            $product->save();
            return $product;
        }
        return null;
    }

    public function updateProduct($productId, $params = []){
        if(count($params) > 0){
            $product = Product::find($productId);
            if(isset($product)){
                $product->product_name = $params['productName'];
                $product->product_code = $params['productCode'];
                $product->vendor_id = $params['vendorId'];
                $product->product_type_id = $params['productTypeId'];
                $product->product_price = $params['productPrice'];
                if(isset($params['productCostPrice'])){
                    $product->product_cost_price = $params['productCostPrice'];
                }
                if(isset($params['productComparePrice'])){
                    $product->product_compare_price = $params['productComparePrice'];
                }
                $product->product_sale_percent = $params['productSalePercent'];
                $product->is_public = $params['isPublic'];
                $product->product_qty = 0;
                $product->product_description = $params['productDescription'];
                $product->product_content = $params['productContent'];
                if(isset($params['productImage'])){
                    $product->product_image = $params['productImage'];
                }
                $product->save();
            }
            return $product;
        }
        return null;
    }

    public function updateImage(Product $product, $imageName){
        if(isset($product)){
            $product->product_image = $imageName;
            $product->save();
            return $product;
        }
    }

    public function delete($productId){
        $product = Product::find($productId);
        if(isset($product)){
            $product->is_delete = Constant::$DELETE_FLG_ON;
            $product->save();
        }
    }

    //Logic Guest
    public function getListProductByProductType($productTypeId){
        $products = Db::table(TableNameDB::$TableProduct.' as product')
            ->where('is_delete',Constant::$DELETE_FLG_OFF)
            ->where('is_public', Constant::$PUBLIC_FLG_ON)
            ->whereIn('product_type_id',function($query) use ($productTypeId){
                $query->select('id')
                    ->from(TableNameDB::$TableProductType)
                    ->where('id',$productTypeId)
                    ->orWhere('parent_id',$productTypeId);
            })
            ->orderBy('created_at','desc')
            ->get();
        return $products;
    }
}
