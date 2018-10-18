<?php

namespace App\Http\Controllers\Guest;

use App\Common\AppCommon;
use App\Common\Constant;
use Cart;
use Illuminate\Http\Request;
use StdClass;
use Addressing;
use Curl;

class CartController extends Controller
{
    public function index(){
        //https://ezcmd.com/apps/ajax_apps/get_countries?term=
//        $request = Request::create('https://ezcmd.com/apps/ajax_apps/get_sd1/VN?term=', 'GET');
        //https://ezcmd.com/apps/ajax_apps/get_sd2/VN/1594446?term=
        $response = Curl::to('https://ezcmd.com/apps/ajax_apps/get_sd1/VN?term=')
            ->get();
        dd(json_decode($response));


//        $country = Addressing::country('VN')->administrativeAreas();
        $country = Addressing::country('VN');
        dump($country->administrativeAreas());
        dump($country);
        $country = Addressing::country('VN')->administrativeArea('VN-49');
//        $alabama = $country->findAdministrativeArea('VN-63');
        dd($country);
        return view('guest.cart.cart');
    }

    public function addCart(Request $request){
        $qty = 0;
        if(isset($request->quantity)){
            $qty = $request->quantity;
        }
        $productId = '';
        if(isset($request->id)){
            $productId = $request->id;
        }
        $data = $this->parseCartProduct($productId,$qty);
        $result = new StdClass();
        if(isset($data)){
            Cart::add($data);
            $result->status = '0';
        }else{
            $result->status = '1';
        }
        return response()->json($result);
    }

    private function parseCartProduct($productId, $qty){
        $product = $this->productService->getProductById($productId);
        if(isset($product)){
            $data = array(
                'id' => $productId,
                'name' => $product->product_name,
                'price' => $product->product_price,
                'quantity' => $qty,
                'attributes' => array(
                    'image' => asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image)
                )
            );
            return $data;
        }
    }

    private function checkCart($productId){
        $item = Cart::get($productId);
        if(isset($item)){
            return true;
        }
        return false;
    }

    public function change(Request $request){
        $qty = 0;
        if(isset($request->quantity)){
            $qty = $request->quantity;
        }
        $productId = '';
        if(isset($request->id)){
            $productId = $request->id;
        }
        $result = new StdClass();
        $result->status = '1';
        if($this->checkCart($productId)){
            Cart::update($productId,array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $qty
                )
            ));
            $item = Cart::get($productId);
            $result->quantity = $item->quantity;
            $result->money_line = AppCommon::formatMoney($item->getPriceSum()).'₫';
            $result->subtotal = AppCommon::formatMoney(Cart::getSubTotal()).'₫';
            $result->status = '0';
        }
        $result->id = $productId;
        $result->item_count = Cart::getTotalQuantity();
        return response()->json($result);
    }

    public function destroy($id){
        $item = Cart::get($id);
        if(isset($item)){
            Cart::remove($id);
        }
        return redirect()->route('cart');
    }

    public function checkOut(){
        return view('guest.cart.check_out');
    }
}
