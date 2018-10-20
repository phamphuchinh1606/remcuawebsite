<?php

namespace App\Logics;

use App\Common\AppCommon;
use App\Common\Constant;
use App\Models\Order;
use App\Models\TableNameDB;

class OrderLogic extends BaseLogic{

    public function findId($orderId){
        return Order::find($orderId);
    }

    public function save($order){
        if($order){
            $order->save();
        }
    }

    public function getAll($search = [] , $limitPage = 20){
        $tableOrder = TableNameDB::$TableOrder;
        $query = Order::join(TableNameDB::$TableOrderAddress. ' as shipping', $tableOrder.'.id','=','shipping.order_id')
                        ->select($tableOrder.'.*', 'shipping.full_name','shipping.email','shipping.phone_number');
        if(count($search) > 0){
        }
        $orders = $query->paginate($limitPage);
        return $orders;
    }

    public function getOrderInfo($orderId){
        $tableOrder = TableNameDB::$TableOrder;
        $tableProvince = TableNameDB::$TableProvince;
        $tableDistrict = TableNameDB::$TableDistrict;
        $order = Order::join(TableNameDB::$TableOrderAddress.' as address',$tableOrder.'.id','=','address.order_id')
                ->leftjoin($tableProvince.' as province','province.code','=','address.ward')
                ->leftjoin($tableDistrict.' as district','district.code','=','address.district')
                ->where($tableOrder.'.id',$orderId)
                ->select($tableOrder.'.*', 'address.full_name','address.email','address.phone_number','address.address')
                ->first();
        return $order;
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
