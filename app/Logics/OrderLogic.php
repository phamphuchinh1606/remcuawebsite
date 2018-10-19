<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\Order;

class OrderLogic extends BaseLogic{
    public function create(){
        $order = new Order();

    }
}
