<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\Product;
use DB;
use App\Models\TableNameDB;
use Slug;

class ProductLogic extends BaseLogic{

    public function getAllLProduct(){
        $listProducts = Db::table(TableNameDB::$TableProduct.' as product')
                            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
                            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
                            ->select('product.*', 'type.product_type_name')
                            ->paginate(20);
        return $listProducts;
    }

    public function getAllProductBySearchInfo($searchInfo = null, $sortBy = null){
        $query = Db::table(TableNameDB::$TableProduct.' as product')
            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->where('product.is_delete', Constant::$DELETE_FLG_OFF);
        $delimiter = '-';

        if(isset($searchInfo)){
            if(isset($searchInfo->product_type)){
                $productTypes = explode($delimiter,$searchInfo->product_type);
                $query->where(function($query) use ($productTypes) {
                    foreach ($productTypes as $productTypeId){
                        if($productTypeId != ''){
                            $query->orWhere('type.id',$productTypeId)
                                ->orWhere('type.parent_id',$productTypeId);
                        }
                    }
                });
            }
            if(isset($searchInfo->product_price) && $searchInfo->product_price != ''){
                $productPrices = explode($delimiter,$searchInfo->product_price);
                $query->where(function($query) use ($productPrices) {
                    foreach ($productPrices as $productPrice){
                        switch ($productPrice){
                            case 'less_100000':
                                $query->orWhere('product.product_price','<',100000);
                                break;
                            case '100000_300000':
                                $query->orWhereBetween('product.product_price',array(100000, 300000));
                                break;
                            case '300000_500000':
                                $query->orWhereBetween('product.product_price',array(300000, 500000));
                                break;
                            case '500000_1000000':
                                $query->orWhereBetween('product.product_price',array(500000, 1000000));
                                break;
                            case 'bigger_1000000':
                                $query->orWhere('product.product_price','>',1000000);
                                break;
                        }
                    }
                });

            }
        }
        if($sortBy != null){
            switch ($sortBy){
                case Constant::$SORT_BY_PRODUCT_CREATED_ASCENDING:
                    $query->orderBy('created_at','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_CREATED_DESCENDING:
                    $query->orderBy('created_at','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_PRICE_ASCENDING:
                    $query->orderBy('product_price','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_PRICE_DESCENDING:
                    $query->orderBy('product_price','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_TITLE_ASCENDING:
                    $query->orderBy('product_name','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_TITLE_DESCENDING:
                    $query->orderBy('product_name','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_BEST_SELLING:
                    $query->orderBy('qty_sale_order','desc');
                    break;
                default:
                    $query->orderBy('created_at','desc');
                    break;
            }
        }else{
            $query->orderBy('created_at','desc');
        }
        $listProducts = $query->select('product.*', 'type.product_type_name')
//        dd($query->toSql());
            ->paginate(20);
        return $listProducts;
    }

    public function searchProductByName($productName){
        $listProducts = Db::table(TableNameDB::$TableProduct.' as product')
            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
            ->whereRaw('LOWER(product.product_name) like \'%'.strtolower($productName).'%\'')
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
        $products = Product::where('products.is_delete', Constant::$DELETE_FLG_OFF)
            ->where('products.is_public',Constant::$PUBLIC_FLG_ON)
            ->orderBy('qty_sale_order','desc')
            ->limit($limit)->get();
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
            if(isset($params['productName'])){
                $product->slug = Slug::createSlug(Product::class,'slug',$params['productName']);
            }
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
                if(isset($params['productName'])){
                    $product->slug = Slug::createSlug(Product::class,'slug',$params['productName']);
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
    public function getListProductByProductType($productTypeId, $sortBy, $limitPage = 12){
        $query = Db::table(TableNameDB::$TableProduct.' as product')
            ->where('is_delete',Constant::$DELETE_FLG_OFF)
            ->where('is_public', Constant::$PUBLIC_FLG_ON)
            ->whereIn('product_type_id',function($query) use ($productTypeId){
                $query->select('id')
                    ->from(TableNameDB::$TableProductType)
                    ->where('id',$productTypeId)
                    ->orWhere('parent_id',$productTypeId);
            });
        if($sortBy != null){
            switch ($sortBy){
                case Constant::$SORT_BY_PRODUCT_CREATED_ASCENDING:
                    $query->orderBy('created_at','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_CREATED_DESCENDING:
                    $query->orderBy('created_at','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_PRICE_ASCENDING:
                    $query->orderBy('product_price','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_PRICE_DESCENDING:
                    $query->orderBy('product_price','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_TITLE_ASCENDING:
                    $query->orderBy('product_name','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_TITLE_DESCENDING:
                    $query->orderBy('product_name','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_BEST_SELLING:
                    $query->orderBy('qty_sale_order','desc');
                    break;
                default:
                    $query->orderBy('created_at','desc');
                    break;
            }
        }else{
            $query->orderBy('created_at','desc');
        }
        $products = $query->paginate($limitPage);
        return $products;
    }
}
