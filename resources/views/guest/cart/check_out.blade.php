@extends('guest.cart.template')

@section('cart.content')
    <form class="clearfix" accept-charset="UTF-8" method="post" action="{{route('cart.check_out.payment')}}">
        @csrf
        <div class="step">
            <div class="step-sections " step="1">
                <div class="section">
                    <div class="section-header">
                        <h2 class="section-title">Thông tin giao hàng</h2>
                    </div>
                    {{--Section Content Not Login--}}
                    @include('guest.cart.__section_content_not_login', ['shippingInfo' => $shippingInfo])

                    {{--Section Content Address--}}
                    @include('guest.cart.__section_content_address', ['shippingInfo' => $shippingInfo, 'provinces' => $provinces])

                    <div id="change_pick_location_or_shipping">


                    </div>
                </div>


            </div>
            <div class="step-footer">
                <input name="utf8" type="hidden" value="✓">
                <button type="submit" class="step-footer-continue-btn btn">
                    <span class="btn-content">Hoàn tất đơn hàng</span>
                    <i class="btn-spinner icon icon-button-spinner"></i>
                </button>
                <a class="step-footer-previous-link" href="{{route('cart')}}">
                    <svg class="previous-link-icon icon-chevron icon" width="6.7" height="11.3">
                        <path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path>
                    </svg>
                    Giỏ hàng
                </a>


            </div>
        </div>
    </form>
@endsection
