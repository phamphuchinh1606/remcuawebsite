<?php use App\Common\AppCommon; ?>
@extends('guest.cart.template')

@section('cart.content')
    <div class="step">
        <form id="form_next_step" accept-charset="UTF-8" method="post" action="{{route('cart.check_out.finish')}}">
            @csrf
            <div class="step-sections " step="2">
                <div id="section-shipping-rate" class="section">
                    <div class="section-header">
                        <h2 class="section-title">Phương thức vận chuyển</h2>
                    </div>
                    <div class="section-content">

                        <div class="content-box">

                            <div class="content-box-row">
                                <div class="radio-wrapper">
                                    <label class="radio-label" for="shipping_rate_id_698770">
                                        <div class="radio-input">
                                            <input id="shipping_rate_id_698770" class="input-radio" type="radio" name="shipping_rate_id" value="698770" checked="">
                                        </div>
                                        <span class="radio-label-primary">Giao hàng tận nơi</span>
                                        <span class="radio-accessory content-box-emphasis">
                                            0₫
                                        </span>
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="section-payment-method" class="section">
                    <div class="section-header">
                        <h2 class="section-title">Phương thức thanh toán</h2>
                    </div>
                    <div class="section-content">
                        <div class="content-box">
                            <div class="radio-wrapper content-box-row">
                                <label class="radio-label" for="payment_method_id_708962">
                                    <div class="radio-input">
                                        <input id="payment_method_id_708962" class="input-radio" name="payment_method_id" type="radio" value="708962" checked="">
                                    </div>
                                    <span class="radio-label-primary">Thanh toán khi giao hàng (COD)</span>
                                </label>
                            </div>
                            {{--<div class="radio-wrapper content-box-row">--}}
                                {{--<label class="radio-label" for="payment_method_id_708964">--}}
                                    {{--<div class="radio-input">--}}
                                        {{--<input id="payment_method_id_708964" class="input-radio" name="payment_method_id" type="radio" value="708964">--}}
                                    {{--</div>--}}
                                    {{--<span class="radio-label-primary">Chuyển khoản qua ngân hàng</span>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>

            </div>
            <div class="step-footer">

                    <input name="utf8" type="hidden" value="✓">
                    <button type="submit" class="step-footer-continue-btn btn">
                        <span class="btn-content">Hoàn tất đơn hàng</span>
                        <i class="btn-spinner icon icon-button-spinner"></i>
                    </button>

                <a href="{{route('cart.check_out')}}" class="step-footer-previous-link">
                    <svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3">
                        <path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path></svg>
                    Quay lại thông tin giao hàng
                </a>

            </div>
        </form>
    </div>
@endsection
