<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index($id = null, Request $request){
        $productType = null;
        if($id != null){
            $productType = $this->productTypeService->findId($id);
        }
        $sortBy = null;
        if(isset($request->sort_by)) $sortBy = $request->sort_by;
        $products = $this->productService->getListProductByProductType($id,$sortBy);
        return view('guest.collection.collection',[
            'products' => $products,
            'productType' => $productType,
            'sortBy' => $sortBy
        ]);
    }

    public function search(Request $request){
        $products = [];
        if(isset($request->product_name)){
            $products = $this->productService->searchProductByName($request->product_name);
        }
        return view('guest.collection.search',[
            'products' => $products,
            'product_name' => $request->product_name
        ]);
    }
}
