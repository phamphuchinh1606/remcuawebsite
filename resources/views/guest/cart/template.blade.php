<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">
<head>
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/png"/>
    <title>
        {{$appInfo->app_name}}
    </title>

    <meta name="description" content="{{$appInfo->app_name}}" />

    <link href="{{asset('/css/guest/plugins/checkouts.css')}}" rel='stylesheet' type='text/css'  media='all'  />
    <link href="{{asset('/css/guest/plugins/check_out.css')}}" rel='stylesheet' type='text/css'  media='all'  />
    <script src='{{ asset('/js/guest/plugins/jquery.min.js?v=1543') }}' type='text/javascript'></script>
    <script src="{{asset('/js/guest/plugins/jquery.validate.js')}}" type='text/javascript'></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">

</head>
<body>
    <input id="reloadValue" type="hidden" name="reloadValue" value="" />
    <input id="is_vietnam" type="hidden" value="true" />
    <input id="is_vietnam_location" type="hidden" value="true" />
    <div class="banner">
        <div class="wrap">
            <a href="{{route('home')}}" class="logo">
                <h1 class="logo-text">{{$appInfo->app_name}}</h1>
            </a>
        </div>
    </div>
    <button class="order-summary-toggle order-summary-toggle-hide">
        <div class="wrap">
            <div class="order-summary-toggle-inner">
                <div class="order-summary-toggle-icon-wrapper">
                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-icon">
                        <path d=""></path></svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-show">
                    <span>Hiển thị thông tin đơn hàng</span>
                    <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path></svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-hide">
                    <span>Ẩn thông tin đơn hàng</span>
                    <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z"></path></svg>
                </div>
                <div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="130500000">
                    <span class="total-recap-final-price">1,305,000₫</span>
                </div>
            </div>
        </div>
    </button>
    <div class="content content-second">
        <div class="wrap">
            <div class="sidebar sidebar-second">
                <div class="sidebar-content">
                    <div class="order-summary">
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓">
                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                    <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="off" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="" />
                                                </div>
                                                <button type="submit" class="field-input-btn btn btn-default btn-disabled">
                                                    <span class="btn-content">Sử dụng</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">

        <div class="wrap">
            <div class="sidebar">
                @include('guest.cart.__sidebar_content')
            </div>
            <div class="main">
                <div class="main-header">
                    <a href="/" class="logo">
                        <h1 class="logo-text">{{$appInfo->app_name}}</h1>
                    </a>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('cart')}}">Giỏ hàng</a>
                        </li>

                        <li class="breadcrumb-item breadcrumb-item-current">
                            Thông tin giao hàng
                        </li>
                        {{--<li class="breadcrumb-item ">--}}
                            {{--Phương thức thanh toán--}}
                        {{--</li>--}}
                    </ul>

                </div>
                <div class="main-content">
                    @yield('cart.content')
                </div>
                <div class="main-footer">

                </div>
            </div>
        </div>

    </div>
</body>
</html>

