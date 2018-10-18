<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index($id = null){
        $products = $this->productService->getListProductByProductType($id);
        return view('guest.collection.collection',[
            'products' => $products
        ]);
    }
}
