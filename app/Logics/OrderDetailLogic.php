<?php

namespace App\Logics;

use App\Models\OrderDetail;

class OrderDetailLogic extends BaseLogic{
    public function create($params = []){
        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $params['orderId'];
        $orderDetail->product_id = $params['productId'];
        $orderDetail->product_price = $params['productPrice'];
        $orderDetail->product_qty = $params['productQty'];
        $orderDetail->total_money = $params['totalMoney'];
        $orderDetail->save();
        return $orderDetail;
    }
}
