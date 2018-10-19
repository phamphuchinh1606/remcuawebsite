<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = $this->orderService->getAll();
        return $this->viewAdmin('order.index',[
            'orders' => $orders
        ]);
    }

    public function detail($id){
//        $order = $this->orderService->getAll()
    }
}
