<?php use App\Common\AppCommon; ?>
@extends('guest.layouts.master')

@section('head.title')
    {{$appInfo->app_name}}
@endsection

@section('template','cart')

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
@endsection

@section('body.content')
    <section id="insCartPage" class="bg_w ajax-cart-popup">
        <div class="container">
            <div class="content">
                <div id="AjaxifyCart" class="ajaxcart">
                    <h1 class="page-header">Giỏ Hàng</h1>
                    <?php $carts =  Cart::getContent()?>
                    @if(!isset($carts) || count($carts) <= 0)
                        <div class="page-content not-item text-center">
                            @if(\Session::has('message'))
                                <div class="alert alert-success"> {{ \Session::get('message') }}</div>
                            @endif
                            <div class="img text-center">
                                <img src="{{asset('images/guest/empty_cart.png')}}" alt="Không có sản phẩm nào trong giỏ hàng của bạn">
                            </div>
                            <p>
                                Không có sản phẩm nào trong giỏ hàng của bạn
                            </p>
                            <div class="ctnBuy">
                                <a href="{{route('home')}}" class="btn insButton closeCartLine">Tiếp tục mua hàng </a>
                            </div>
                        </div>
                    @else
                        <div class="page-content">
                            <div class="row">
                                <div class="boxCart leftCart col-md-8 col-sm-12 col-xs-12 ">
                                    <div class="cart_header_labels hidden-xs clearfix">
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_product first_item">
                                                Sản phẩm
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-3 col-md-3">
                                            <div class="cart_description item">
                                                Mô Tả
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_price item">
                                                Giá
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_quantity item">
                                                Số Lượng
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_total item">
                                                Tổng
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-1 col-md-1">
                                            <div class="cart_delete last_item">
                                                Xóa
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ajax_content_cart">
                                        <?php $carts =  Cart::getContent()?>
                                        @if(isset($carts))
                                            @foreach($carts as $cart)
                                                <?php
                                                    $image = $cart->attributes->has('image') ? $cart->attributes['image'] : '';
                                                    $slug = $cart->attributes->has('slug') ? $cart->attributes['slug'] : '1'?>
                                                <div class="list_product_cart clearfix" data-id="1019623662">
                                                    <div class="cpro_item image col-xs-3 col-sm-2 col-md-2">
                                                        <div class="cpro_item_inner">
                                                            <a href="{{route('product_detail',['slug' => $slug, 'id' => $cart->id])}}" class="cart__image">
                                                                <img class="img-responsive" src="{{$image}}" alt="{{$cart->name}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="cpro_item text-left title col-xs-9 col-sm-3 col-md-3">
                                                        <div class="cpro_item_inner">
                                                            <a href="{{route('product_detail',['slug' => $slug, 'id' => $cart->id])}}" class="product_name">
                                                                {{$cart->name}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="cpro_item price col-xs-9 col-sm-2 col-md-2">
                                                        <div class="cpro_item_inner">
                                                            <span class="price product-price"><span class="money">{{AppCommon::formatMoney($cart->price)}}₫</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="cpro_item qty text-center col-xs-6 col-sm-2 col-md-2">
                                                        <div class="cpro_item_inner">
                                                            <div class="ajaxcart__qty">
                                                                <input type="number" class="ajaxcart__qty-num" min="1" value="{{$cart->quantity}}" data-id="{{$cart->id}}" aria-label="quantity" pattern="[0-9]*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cpro_item line-price col-xs-12 col-sm-2 col-md-2 hidden-xs">
                                                        <div class="cpro_item_inner">
                                                            <span class="price product-price money_line" data-id="{{$cart->id}}">
                                                                <span class="money">{{AppCommon::formatMoney($cart->getPriceSum())}}₫</span>
                                                            </span>
                                                            <input type="hidden" value="{{$cart->getPriceSum()}}₫" data-id="{{$cart->id}}" class="line_money_temp">
                                                        </div>
                                                    </div>
                                                    <div class="cpro_item remove col-xs-2 col-sm-1 col-md-1">
                                                        <div class="cpro_item_inner">
                                                            <a href="{{route('cart.delete',['id' => $cart->id])}}" class="cart__remove ajaxcart__remove" data-id="{{$cart->id}}">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="boxCart rightCart col-md-4 col-sm-12 col-xs-12 ">
                                    <div class="list_button_cart clearfix">
                                        <div class="actionCart clearfix text-right">
                                            <p>
                                                <span class="cart__subtotal-title pull-left">Tổng</span>
                                                <span class="h3 cart__subtotal pull-right"><span class="money">{{AppCommon::formatMoney(Cart::getSubTotal())}}₫</span></span>
                                            </p>
                                            <!--<p><em>Đã bao gồm thuế và phí Shipping</em></p>-->
                                            <div class="groupButton text-center">
                                                <a class="btn con-ajax-cart btn-outline insButton" href="{{route('home')}}" title="Tiếp Tục Mua Sắm">Tiếp Tục Mua Sắm</a>
                                                <input type="submit" onclick="window.location ='{{route('cart.check_out')}}'" name="checkout" class="btn btn-outline checkout insButton" value="Thanh Toán">

                                            </div>
                                        </div>
                                        <div class="note_item">

                                            <div class="note_cart">
                                                <label class="control-label" for="CartSpecialInstructions">Chú Thích</label>
                                                <textarea name="note" class="form-control" placeholder="Bạn muốn mô tả rõ hơn về đơn hàng..." id="CartSpecialInstructions"></textarea>
                                            </div>

                                        </div>


                                        {{--<div class="pd_saler">--}}
                                            {{--<h3>Dịch vụ &amp; Khuyến mãi</h3>--}}

                                            {{--<p>--}}
                                                {{--Nhập mã ECQLJKY7QROS khi thanh toán, giảm ngay 50.000đ.--}}
                                            {{--</p>--}}


                                            {{--<p>--}}
                                                {{--Tặng mã coupon giảm 500.000đ khi đơn hàng trên 10 triệu đồng.--}}
                                            {{--</p>--}}


                                            {{--<p>--}}
                                                {{--Giao hàng miễn phí trong nội thành Tp. Hồ Chí Minh--}}
                                            {{--</p>--}}


                                            {{--<p>--}}
                                                {{--Giảm ngay 20% đối với những sản phẩm thuộc nhóm Oppo--}}
                                            {{--</p>--}}


                                        {{--</div>--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
