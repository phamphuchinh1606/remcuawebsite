<?php

namespace App\Logics;

use App\Common\AppCommon;
use App\Common\Constant;
use App\Models\Order;
use App\Models\TableNameDB;

class OrderLogic extends BaseLogic{

    public function getAll($search = [] , $limitPage = 20){
        $tableOrder = TableNameDB::$TableOrder;
        $query = Order::join(TableNameDB::$TableOrderAddress. ' as shipping', $tableOrder.'.id','=','shipping.order_id')
                        ->select($tableOrder.'.*', 'shipping.full_name','shipping.email','shipping.phone_number');
        if(count($search) > 0){
        }
        $orders = $query->paginate($limitPage);
        return $orders;
    }

    public function create($params = []){
        $order = new Order();
        $order->order_date = $params['orderDate'];
        $order->total_amount = $params['totalAmount'];
        $order->payment_amount = $params['paymentAmount'];
        $order->status_order = $params['statusOrder'];
        $order->note = $params['note'];
        $order->save();
        return $order;
    }
}
