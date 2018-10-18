<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">
<head>
    <link rel="shortcut icon" href="//theme.hstatic.net/1000244873/1000313408/14/favicon.png?v=1543" type="image/png" />
    <title>
        {{$appInfo->app_name}}
    </title>


    <meta name="description" content="{{$appInfo->app_name}}" />

    <link href='//hstatic.net/0/0/global/checkouts.css?v=1.1' rel='stylesheet' type='text/css'  media='all'  />
    <link href='//theme.hstatic.net/1000244873/1000313408/14/check_out.css?v=1543' rel='stylesheet' type='text/css'  media='all'  />
    <script src='//hstatic.net/0/0/global/jquery.min.js' type='text/javascript'></script>
    <script src='//hstatic.net/0/0/global/jquery.validate.js' type='text/javascript'></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">


    <script src="{{asset('js/guest/cart/cart.js')}}" type='text/javascript'></script>


    <script type="text/javascript">
        var toggleShowOrderSummary = false;
        $(document).ready(function() {
            var currentUrl = '';


            currentUrl = '/checkouts/3d324ed232954897a0289ad4adc881b0?step=1';


            if ($('#reloadValue').val().length == 0)
            {
                $('#reloadValue').val(currentUrl);
                $('body').show();
            }
            else
            {
                window.location = $('#reloadValue').val();
                $('#reloadValue').val('');
            }

            $('body')
                .on('click', '.order-summary-toggle', function() {
                    toggleShowOrderSummary = !toggleShowOrderSummary;

                    if(toggleShowOrderSummary) {
                        $('.order-summary-toggle')
                            .removeClass('order-summary-toggle-hide')
                            .addClass('order-summary-toggle-show');

                        $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                            .removeClass('order-summary-is-collapsed')
                            .addClass('order-summary-is-expanded');

                        $('.sidebar.sidebar-second .sidebar-content .order-summary')
                            .removeClass('order-summary-is-expanded')
                            .addClass('order-summary-is-collapsed');
                    } else {
                        $('.order-summary-toggle')
                            .removeClass('order-summary-toggle-show')
                            .addClass('order-summary-toggle-hide');

                        $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                            .removeClass('order-summary-is-expanded')
                            .addClass('order-summary-is-collapsed');

                        $('.sidebar.sidebar-second .sidebar-content .order-summary')
                            .removeClass('order-summary-is-collapsed')
                            .addClass('order-summary-is-expanded');
                    }
                });
        });
    </script>

    <script type='text/javascript'>
        //<![CDATA[
        if ((typeof Haravan) === 'undefined') {
            Haravan = {};
        }
        Haravan.culture = 'vi-VN';
        Haravan.shop = 'st-fashion.myharavan.com';
        Haravan.theme = {"name":"ST - Fashion","id":1000313408,"role":"main"};
        Haravan.domain = 'st-fashion.myharavan.com';
        //]]>
    </script>
    <script type='text/javascript'>
        window.HaravanAnalytics = window.HaravanAnalytics || {};
        window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
        window.HaravanAnalytics.meta.currency = 'VND';
        var meta = {"page":{"pageType":"checkout","resourceType":"checkout","resourceId":"3d324ed232954897a0289ad4adc881b0"},"cart":{"products":[{"variantId":1019623659,"productId":1009687435,"price":43500000.0,"name":"Áo sơ mi Aristino ASS17-MO57 - M","sku":"STMF-07","vendor":"Aristino","variant":"M","type":"Quần áo","quantity":3}],"item_count":3,"total_price":130500000.0}};
        for (var attr in meta) {
            window.HaravanAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script async src='//hstatic.net/0/0/global/haravan-analytics.min.js?v=3' type='text/javascript'></script>

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
                        <li class="breadcrumb-item ">
                            Phương thức thanh toán
                        </li>

                    </ul>

                </div>
                <div class="main-content">

                    <div class="step">
                        <div class="step-sections " step="1">
                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Thông tin giao hàng</h2>
                                </div>
                                {{--Section Content Not Login--}}
                                @include('guest.cart.__section_content_not_login')

                                {{--Section Content Address--}}
                                @include('guest.cart.__section_content_address')

                                <div id="change_pick_location_or_shipping">


                                </div>
                            </div>


                        </div>
                        <div class="step-footer">


                            <form id="form_next_step" accept-charset="UTF-8" method="post">
                                <input name="utf8" type="hidden" value="✓">
                                <button type="submit" class="step-footer-continue-btn btn">
                                    <span class="btn-content">Tiếp tục đến phương thức thanh toán</span>
                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                </button>
                            </form>
                            <a class="step-footer-previous-link" href="{{route('cart')}}">
                                <svg class="previous-link-icon icon-chevron icon" width="6.7" height="11.3">
                                    <path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path>
                                </svg>
                                Giỏ hàng
                            </a>


                        </div>
                    </div>

                </div>
                <div class="main-footer">

                </div>
            </div>
        </div>

    </div>
</body>
</html>

