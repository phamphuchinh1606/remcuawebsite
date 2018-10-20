<?php

namespace App\Http\Controllers\Admin;

use App\Common\Constant;
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
        $order = $this->orderService->getDetail($id);
        $isShowConfirm = false;
        $isShowShipping = false;
        $isShowFinish = false;
        $isShowCancel = false;
        switch ($order->status_order){
            case Constant::$ORDER_STATUS_NEW_CODE:
                $isShowConfirm = true;
                $isShowShipping = true;
                $isShowFinish = true;
                $isShowCancel = true;
                break;
            case Constant::$ORDER_STATUS_CONFIRM_CODE:
                $isShowShipping = true;
                $isShowFinish = true;
                $isShowCancel = true;
                break;
            case Constant::$ORDER_STATUS_SHIPPING_CODE:
                $isShowFinish = true;
                $isShowCancel = true;
                break;
            case Constant::$ORDER_STATUS_FINISH_CODE:
                $isShowCancel = true;
                break;
            case Constant::$ORDER_STATUS_CANCEL_CODE:
                break;
        }
        return $this->viewAdmin('order.detail',[
            'order' => $order,
            'isShowConfirm' => $isShowConfirm,
            'isShowShipping' => $isShowShipping,
            'isShowFinish' => $isShowFinish,
            'isShowCancel' => $isShowCancel
        ]);
    }

    public function statusConfirm($id){
        $this->orderService->updateStatusOrder($id, Constant::$ORDER_STATUS_CONFIRM_CODE);
        return redirect()->route('admin.order.index')->with('message','Bạn đã xác nhận đơn hàng thành công');
    }

    public function statusShipping($id){
        $this->orderService->updateStatusOrder($id, Constant::$ORDER_STATUS_SHIPPING_CODE);
        return redirect()->route('admin.order.index')->with('message','Bạn đã chuyển trạng thái vận chuyển đơn hàng thành công');
    }

    public function statusFinish($id){
        $this->orderService->updateStatusOrder($id, Constant::$ORDER_STATUS_FINISH_CODE);
        return redirect()->route('admin.order.index')->with('message','Bạn đã hoàn thành đơn hàng thành công');
    }

    public function statusCancel($id){
        $this->orderService->updateStatusOrder($id, Constant::$ORDER_STATUS_CANCEL_CODE);
        return redirect()->route('admin.order.index')->with('message','Bạn đã hủy đơn hàng thành công');
    }
}
