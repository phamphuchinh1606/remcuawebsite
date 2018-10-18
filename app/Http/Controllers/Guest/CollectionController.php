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
}
