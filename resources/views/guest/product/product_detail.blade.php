<?php use App\Common\Constant; use App\Common\AppCommon; ?>

@extends('guest.layouts.master')

@section('head.title', $product->product_name)

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
    <link href='{{ asset('/css/guest/plugins/jquery.fancybox.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
@endsection

@section('template','product')

@section('head.init_js')
    {{--<script type='text/javascript'>--}}
        {{--window.HaravanAnalytics = window.HaravanAnalytics || {};--}}
        {{--window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};--}}
        {{--window.HaravanAnalytics.meta.currency = 'VND';--}}
        {{--var meta = {"page":{"pageType":"product","resourceType":"product","resourceId":1009687436},"product":{"id":1009687436,"type":"Quần áo","title":"Áo sơ mi dài tay Aristino ALS021","price":33900000.0,"selected_or_first_available_variant":{"id":1019623662,"price":33900000.0,"title":"Áo sơ mi dài tay Aristino ALS021 - Trắng / M","sku":"STMF-04","variant_title":"Trắng / M"},"vendor":"Aristino","imageUrl":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","available":true}};--}}
        {{--for (var attr in meta) {--}}
            {{--window.HaravanAnalytics.meta[attr] = meta[attr];--}}
        {{--}--}}
    {{--</script>--}}
    {{--<script async src='{{asset('js/guest/plugins/haravan-analytics.min.js?v=3')}}' type='text/javascript'></script>--}}
@endsection

@section('body.js')
    {{--<script src='{{asset('js/guest/product/product_detail.js?v=1543')}}' type='text/javascript'></script>--}}
    <script src='{{asset('js/guest/plugins/jquery.fancybox.js?v=1543')}}' type='text/javascript'></script>
@endsection

@section('body.content')
    <section id="insProductPage" class="tamplateSection">
        {{--Breadcrumb--}}
        {{--@include('guest.common.__breadcrumb_show')--}}
        {{ Breadcrumbs::render('guest.product_detail', $product) }}

        <div class="container">
            <div class="wrapperPdPage">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12" id="pdWrapDetail">
                        <div class="pdBlockDetail pdFirstInfo">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 pdImages">
                                    <div class="wrapperPdImage clearfix">
                                        <div id="leftThumbsImg" class="pdImgThumbs pull-left">
                                            <ul class="listThumbs notStyle">
                                                <li class="imgThumb">
                                                    <a href="javascript:void(0)" data-fancybox="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image)}}" data-image="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image)}}">
                                                        <img alt="{{$product->product_name}}" src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image)}}" >
                                                    </a>
                                                </li>
                                                @if(isset($product->images))
                                                    @foreach($product->images as $image)
                                                        <li class="imgThumb">
                                                            <a href="javascript:void(0)" data-fancybox="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$image->image_src)}}" data-image="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$image->image_src)}}">
                                                                <img alt="{{$product->product_name}}" src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$image->image_src)}}" >
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </div>
                                        <div id="imgFeatured" class="featureImg pull-left">
                                            <a class="pdFancybox" href="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image)}}">
                                                <img alt="{{$product->product_name}}" src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image)}}" >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pdInfo">
                                    <div class="wrapPdInfo">
                                        <h1 class="title pdTitle">
                                            {{$product->product_name}}
                                        </h1>
                                        <div class="pdBox listInfoDesc">
                                            <ul>
                                                <li class="vendor"><i class="fa fa-gg" aria-hidden="true"></i> Thương hiệu: <span>{{$product->vendor_name}}</span> </li>
                                                <li class="type"><i class="fa fa-tags" aria-hidden="true"></i> Loại: <span>{{$product->product_type_name}}</span> </li>
                                                <li class="sku"><i class="fa fa-codepen" aria-hidden="true"></i> SKU: <span>{{$product->product_code}}</span> </li>
                                            </ul>
                                        </div>
                                        <div class="pdBox pdPriceBoxInfo">
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12 pdBlockInfo pdPriceWrap">
                                                    <div class="wrapBlockInfo">

                                                        <div class="pdPrice">
                                                            <p class="item price">
                                                                <span class="pdLabelPrice">Giá bán: </span>
                                                                <span id="pdPriceNumber">{{AppCommon::formatMoney($product->product_price)}}₫</span>
                                                            </p>
                                                            @if(isset($product->product_cost_price))
                                                                <p class="item comparePrice ">
                                                                    <span class="pdLabelPrice">Giá thị trường: </span>
                                                                    <span id="pdComparePriceNumber">{{AppCommon::formatMoney($product->product_cost_price)}}₫</span>
                                                                </p>
                                                                <p class="item compareSaleOff ">
                                                                    <span class="pdLabelPrice">Tiết kiệm: </span>
                                                                    <span id="pdCompareSalePrice">{{AppCommon::formatMoney($product->product_compare_price)}}₫ </span>
                                                                    @if(isset($product->sale_percent) && $product->sale_percent > 0)
                                                                        <span id="pdCompareSaleOff">-{{$product->sale_percent}}%</span>
                                                                    @endif
                                                                </p>
                                                            @endif

                                                        </div>

                                                        <div class="shortDesc">

                                                            <div class="desc">
                                                                {{$product->product_description}}
                                                            </div>

                                                        </div>
                                                        <div class="actionCart">
                                                            <div class="select clearfix" style="display:none">
                                                                <select id="product-select" name="id">

                                                                    <option value="1019623662">Trắng / M - 339,000₫</option>

                                                                    <option value="1019623663">Đen / M - 339,000₫</option>

                                                                    <option value="1019623664">Xanh / M - 339,000₫</option>

                                                                    <option value="1019623665">Trắng / L - 339,000₫</option>

                                                                    <option value="1019623666">Trắng / XL - 339,000₫</option>

                                                                </select>
                                                            </div>
                                                            <div class="groupQty">
                                                                <button type="button" class="qtyControl minus">-</button>
                                                                <input type="number" maxlength="12" min="1" class="input-text qty" title="Số lượng" size="2" value="1" name="Lines" id="pdQuantity">
                                                                <button type="button" class="qtyControl plus">+</button>
                                                            </div>
                                                            <div class="listAction">
                                                                <button type="button" class="button btn-outline btn-addCart ">
                                                                    <span>Thêm vào giỏ</span>
                                                                </button>
                                                                <button type="button" class="button btn-outline btn-Buynow ">
                                                                    <span>Mua ngay</span>
                                                                </button>
                                                                <a href="javascript:void(0)" class="button btn-outline btn-Soldout hidden">Hết hàng</a>
                                                            </div>
                                                        </div>
                                                        {{--Share Facebook--}}
                                                        <div class="pdSocaial">
                                                            <h4>
                                                                Chia sẻ ngay
                                                            </h4>
                                                            <div class="box_social">
                                                                <div class="fb">
                                                                    <div class="fb-like" data-href="https://st-fashion.myharavan.com/products/ao-so-mi-dai-tay-aristino-als021" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                                                </div>
                                                                <div class="gg">
                                                                    <div class="g-plus" data-action="share" data-annotation="none" data-href="https://st-fashion.myharavan.com/products/ao-so-mi-dai-tay-aristino-als021"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="pdBlockDetail pdTabInfo">
                            <div class="listTabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabDescription" aria-controls="tabDescription" role="tab" data-toggle="tab">Chi tiết sản phẩm</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabFbComment" aria-controls="tabFbComment" role="tab" data-toggle="tab">Bình luận</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="tabDescription">
                                        <div class="content">
                                            {!! $product->product_content !!}
                                        </div>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tabFbComment">
                                        <div class="container-comments">
                                            <div id="fb-root"></div>
                                            <div class="fb-comments" data-href="https://st-fashion.myharavan.com/products/ao-so-mi-dai-tay-aristino-als021" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="pdBlockDetail pdRelatedInfo">
                            <div class="relatedPD">
                                <div class="pdRelated">
                                    <div class="blockTitle">
                                        <h2>
                                            Có thể bạn quan tâm
                                        </h2>
                                    </div>
                                    <div class="relatedListting">
                                        <div class="contentRelatedPd pdListItem row">
                                            @foreach($productSameTypes as $productSameType)
                                                @include('guest.common.__product_show_item_detail',['product' => $productSameType])
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 hidden-sm hidden-xs" id="left_column">
                        <div class="box_sidebar">
                            {{--Left Module Link list--}}
                            @include('guest.common.__right_linklist_menu')
                            {{--Left Module Product--}}
                            @include('guest.common.__right_product_hot', ['productHots' => $productHots])
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{--<?php $amount = 100?>--}}
        {{--<script>--}}
            {{--var check_variant = true;--}}
            {{--var selectCallback = function(variant, selector) {--}}
                {{--var priceText = $('#pdPriceNumber'),--}}
                    {{--compareText = $('#pdComparePriceNumber'),--}}
                    {{--saleText = $('#pdCompareSalePrice'),--}}
                    {{--compareOffText = $('#pdCompareSaleOff');--}}
                {{--if (variant && variant.available) {--}}
                    {{--if(variant.featured_image != null){--}}
                        {{--var img = Haravan.resizeImage(variant.featured_image.src,'grande');--}}
                        {{--if(img.indexOf('http:') != -1 || img.indexOf('https:') != -1 ){--}}
                            {{--img = img.replace(/http:|https:/gi, "");--}}
                        {{--}--}}
                        {{--$(".imgThumb a[data-image='"+img+"']").click().parents('li').addClass('active');--}}
                    {{--}--}}
                    {{--if (variant.sku != null ){--}}
                        {{--jQuery('.listInfoDesc ul li.sku span').html(variant.sku);--}}
                    {{--}else{--}}
                        {{--jQuery('.listInfoDesc ul li.sku span').html('Null');--}}
                    {{--}--}}
                    {{--jQuery('.btn-addCart').removeClass('hidden');--}}
                    {{--jQuery('.btn-Soldout').addClass('hidden');--}}
                    {{--if(variant.price > 0 ){--}}
                        {{--priceText.html(Haravan.formatMoney(variant.price, "{{$amount}}₫"));--}}
                        {{--if(variant.price < variant.compare_at_price){--}}
                            {{--compareText.html(Haravan.formatMoney(variant.compare_at_price, "{{$amount}}₫"));--}}
                            {{--var pro_sold = variant.price ;--}}
                            {{--var pro_comp = variant.compare_at_price / 100;--}}
                            {{--var sale = 100 - (pro_sold / pro_comp) ;--}}
                            {{--var kq_sale = Math.round(sale);--}}
                            {{--var priceMinus = variant.compare_at_price - variant.price;--}}
                            {{--saleText.html(Haravan.formatMoney(priceMinus, "{{$amount}}₫"));--}}
                            {{--compareOffText.html('-'+ kq_sale + '%');--}}
                            {{--$('.comparePrice').removeClass('hidden');--}}
                            {{--$('.compareSaleOff').removeClass('hidden');--}}
                        {{--}else{--}}
                            {{--$('.comparePrice').addClass('hidden');--}}
                            {{--$('.compareSaleOff').addClass('hidden');--}}
                        {{--}--}}
                    {{--}else{--}}
                        {{--priceText.html('Liên hệ');--}}
                        {{--$('.comparePrice').addClass('hidden');--}}
                        {{--$('.compareSaleOff').addClass('hidden');--}}
                    {{--}--}}
                    {{--check_variant = true;--}}
                {{--} else {--}}
                    {{--jQuery('.btn-addCart').addClass('hidden');--}}
                    {{--jQuery('.btn-Soldout').removeClass('hidden');--}}
                    {{--check_variant = false;--}}
                {{--}--}}
                {{--return check_variant;--}}
            {{--};--}}

            {{--jQuery(document).ready(function($){--}}

                {{--new Haravan.OptionSelectors("product-select", { product: {"available":true,"compare_at_price_max":56500000.0,"compare_at_price_min":56500000.0,"compare_at_price_varies":false,"compare_at_price":56500000.0,"content":null,"description":"<p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\"><strong>Chi tiết</strong>:</p><p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\">- Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế,<span>&nbsp;</span><strong>áo sơ mi nam ASS17-MO57</strong><span>&nbsp;</span>giúp khẳng định vẻ ngoài nam tính và hiện đại của bạn. Kiểu dáng slimfit ôm sát vào cơ thể giúp tôn lên body người mặc.</p><p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\">- Kiểu dáng đơn giản với cổ bẻ kết hợp với tay ngắn gập khéo léo cùng đường nét tỉ mỉ, tinh tế mang đến cho bạn một diện mạo hoàn chỉnh mỗi khi xuất hiện.</p><p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\"><strong>Chất liệu</strong>:</p><p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\">-<span>&nbsp;</span><strong>Áo sơ mi ASS17-MO57</strong><span>&nbsp;</span>là sự kết hợp hài hòa giữa sợ Modal và sợi Poly spun mang đến cảm giác mát lạnh khi được chạm vào, khả năng thấm hút, chống nhăn tốt thoải mái, dễ chịu khi mặc. Đây là một trong những sản phẩm chiếm được cảm tình nhiều nhất của tín đồ Aristino trong mùa hè này.</p>","featured_image":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","handle":"ao-so-mi-dai-tay-aristino-als021","id":1009687436,"images":["https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","https:https://product.hstatic.net/1000244873/product/upload_04017362185944ef82975656c6d48ef0.jpg","https:https://product.hstatic.net/1000244873/product/upload_6ebd03d020f442779e85a8fe8951ca22.jpg"],"options":["Màu sắc","Kích thước"],"price":33900000.0,"price_max":33900000.0,"price_min":33900000.0,"price_varies":false,"tags":["miss","thoi-trang","thoi-trang-nam"],"template_suffix":null,"title":"Áo sơ mi dài tay Aristino ALS021","type":"Quần áo","url":"/products/ao-so-mi-dai-tay-aristino-als021","pagetitle":"Áo sơ mi dài tay Aristino ALS021","metadescription":"Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế, áo sơ mi nam ASS17-MO57 giúp khẳng định vẻ ngoài nam tính và hiện đại của bạn.","variants":[{"id":1019623662,"barcode":null,"available":true,"price":33900000.0,"sku":"STMF-04","option1":"Trắng","option2":"M","option3":"","options":["Trắng","M"],"inventory_quantity":5,"old_inventory_quantity":5,"title":"Trắng / M","weight":0.0,"compare_at_price":56500000.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440248,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","variant_ids":[1019623662,1019623665,1019623666]}},{"id":1019623663,"barcode":null,"available":true,"price":33900000.0,"sku":null,"option1":"Đen","option2":"M","option3":"","options":["Đen","M"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Đen / M","weight":0.0,"compare_at_price":56500000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440249,"created_at":"0001-01-01T00:00:00","position":2,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_04017362185944ef82975656c6d48ef0.jpg","variant_ids":[1019623663]}},{"id":1019623664,"barcode":null,"available":true,"price":33900000.0,"sku":null,"option1":"Xanh","option2":"M","option3":"","options":["Xanh","M"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Xanh / M","weight":0.0,"compare_at_price":56500000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440250,"created_at":"0001-01-01T00:00:00","position":3,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_6ebd03d020f442779e85a8fe8951ca22.jpg","variant_ids":[1019623664]}},{"id":1019623665,"barcode":null,"available":true,"price":33900000.0,"sku":null,"option1":"Trắng","option2":"L","option3":"","options":["Trắng","L"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Trắng / L","weight":0.0,"compare_at_price":56500000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440248,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","variant_ids":[1019623662,1019623665,1019623666]}},{"id":1019623666,"barcode":null,"available":true,"price":33900000.0,"sku":null,"option1":"Trắng","option2":"XL","option3":"","options":["Trắng","XL"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Trắng / XL","weight":0.0,"compare_at_price":56500000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440248,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","variant_ids":[1019623662,1019623665,1019623666]}}],"vendor":"Aristino","published_at":"2017-11-24T09:27:46.835Z","created_at":"2017-11-24T09:27:47.085Z","not_allow_promotion":false}, onVariantSelected: selectCallback });--}}

                {{--// Add label if only one product option and it isn't 'Title'.--}}


                {{--// Auto-select first available variant on page load.--}}





                {{--$('.single-option-selector:eq(0)').val("Trắng").trigger('change');--}}

                {{--$('.single-option-selector:eq(1)').val("M").trigger('change');--}}












                {{--$('.selector-wrapper select').each(function(){--}}
                    {{--$(this).wrap( '<span class="custom-dropdown custom-dropdown--white"></span>');--}}
                    {{--$(this).addClass("custom-dropdown__select custom-dropdown__select--white");--}}
                {{--});--}}


            {{--});--}}
        {{--</script>--}}
        {{--<script>--}}
            {{--var swatch_size = parseInt($('.select-swatch').children().size());--}}
            {{--jQuery(document).on('click','.swatch input', function(e) {--}}
                {{--e.preventDefault()--}}
                {{--var $this = $(this);--}}
                {{--var _available = '';--}}
                {{--$this.parent().siblings().find('label').removeClass('sd');--}}
                {{--$this.next().addClass('sd');--}}
                {{--var name = $this.attr('name');--}}
                {{--var value = $this.val();--}}
                {{--$('select[data-option='+name+']').val(value).trigger('change');--}}
                {{--if(swatch_size == 2){--}}
                    {{--if(name.indexOf('1') != -1){--}}
                        {{--$('#variant-swatch-1 .swatch-element').find('input').prop('disabled', false);--}}
                        {{--$('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);--}}
                        {{--$('#variant-swatch-1 .swatch-element label').removeClass('sd');--}}
                        {{--$('#variant-swatch-1 .swatch-element').removeClass('soldout');--}}
                        {{--$('.selector-wrapper .single-option-selector').eq(1).find('option').each(function(){--}}
                            {{--var _tam = $(this).val();--}}
                            {{--$(this).parent().val(_tam).trigger('change');--}}
                            {{--if(check_variant){--}}
                                {{--if(_available == '' ){--}}
                                    {{--_available = _tam;--}}
                                {{--}--}}
                            {{--}else{--}}
                                {{--$('#variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');--}}
                                {{--$('#variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);--}}
                            {{--}--}}
                        {{--})--}}
                        {{--$('.selector-wrapper .single-option-selector').eq(1).val(_available).trigger('change');--}}
                        {{--$('#variant-swatch-1 .swatch-element[data-value="'+_available+'"] label').addClass('sd');--}}
                    {{--}--}}
                {{--}else if (swatch_size == 3){--}}
                    {{--var _count_op2 = $('#variant-swatch-1 .swatch-element').size();--}}
                    {{--var _count_op3 = $('#variant-swatch-2 .swatch-element').size();--}}
                    {{--if(name.indexOf('1') != -1){--}}
                        {{--$('#variant-swatch-1 .swatch-element').find('input').prop('disabled', false);--}}
                        {{--$('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);--}}
                        {{--$('#variant-swatch-1 .swatch-element label').removeClass('sd');--}}
                        {{--$('#variant-swatch-1 .swatch-element').removeClass('soldout');--}}
                        {{--$('#variant-swatch-2 .swatch-element label').removeClass('sd');--}}
                        {{--$('#variant-swatch-2 .swatch-element').removeClass('soldout');--}}
                        {{--var _avi_op1 = '';--}}
                        {{--var _avi_op2 = '';--}}
                        {{--$('#variant-swatch-1 .swatch-element').each(function(ind,value){--}}
                            {{--var _key = $(this).data('value');--}}
                            {{--var _unavi = 0;--}}
                            {{--$('.single-option-selector').eq(1).val(_key).change();--}}
                            {{--$('#variant-swatch-2 .swatch-element label').removeClass('sd');--}}
                            {{--$('#variant-swatch-2 .swatch-element').removeClass('soldout');--}}
                            {{--$('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);--}}
                            {{--$('#variant-swatch-2 .swatch-element').each(function(i,v){--}}
                                {{--var _val = $(this).data('value');--}}
                                {{--$('.single-option-selector').eq(2).val(_val).change();--}}
                                {{--if(check_variant == true){--}}
                                    {{--if(_avi_op1 == ''){--}}
                                        {{--_avi_op1 = _key;--}}
                                    {{--}--}}
                                    {{--if(_avi_op2 == ''){--}}
                                        {{--_avi_op2 = _val;--}}
                                    {{--}--}}
                                    {{--//console.log(_avi_op1 + ' -- ' + _avi_op2)--}}
                                {{--}else{--}}
                                    {{--_unavi += 1;--}}
                                {{--}--}}
                            {{--})--}}
                            {{--if(_unavi == _count_op3){--}}
                                {{--$('#variant-swatch-1 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');--}}
                                {{--setTimeout(function(){--}}
                                    {{--$('#variant-swatch-1 .swatch-element[data-value = "'+_key+'"] input').attr('disabled','disabled');--}}
                                {{--})--}}
                            {{--}--}}
                        {{--})--}}
                        {{--$('#variant-swatch-1 .swatch-element[data-value="'+_avi_op1+'"] input').click();--}}
                    {{--}--}}
                    {{--else if(name.indexOf('2') != -1){--}}
                        {{--$('#variant-swatch-2 .swatch-element label').removeClass('sd');--}}
                        {{--$('#variant-swatch-2 .swatch-element').removeClass('soldout');--}}
                        {{--$('.selector-wrapper .single-option-selector').eq(2).find('option').each(function(){--}}
                            {{--var _tam = $(this).val();--}}
                            {{--$(this).parent().val(_tam).trigger('change');--}}
                            {{--if(check_variant){--}}
                                {{--if(_available == '' ){--}}
                                    {{--_available = _tam;--}}
                                {{--}--}}
                            {{--}else{--}}
                                {{--$('#variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');--}}
                                {{--$('#variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);--}}
                            {{--}--}}
                        {{--})--}}
                        {{--$('.selector-wrapper .single-option-selector').eq(2).val(_available).trigger('change');--}}
                        {{--$('#variant-swatch-2 .swatch-element[data-value="'+_available+'"] label').addClass('sd');--}}
                    {{--}--}}
                {{--}else{--}}

                {{--}--}}
            {{--})--}}
            {{--$(document).ready(function(){--}}
                {{--var _chage = '';--}}
                {{--$('.swatch-element[data-value="'+$('.selector-wrapper .single-option-selector').eq(0).val()+'"]').find('input').click();--}}
                {{--$('.swatch-element[data-value="'+$('.selector-wrapper .single-option-selector').eq(1).val()+'"]').find('input').click();--}}
                {{--if(swatch_size == 1){--}}
                    {{--var _avi_op1 = '';--}}
                    {{--$('#variant-swatch-0 .swatch-element').each(function(ind,value){--}}
                        {{--var _key = $(this).data('value');--}}
                        {{--$('.single-option-selector').eq(0).val(_key).change();--}}
                        {{--if(check_variant == true){--}}
                            {{--if(_avi_op1 == ''){--}}
                                {{--_avi_op1 = _key;--}}
                            {{--}--}}
                        {{--}else{--}}
                            {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');--}}
                            {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');--}}
                        {{--}--}}
                    {{--})--}}
                    {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();--}}
                {{--}else	if(swatch_size == 2){--}}
                    {{--var _avi_op1 = '';--}}
                    {{--var _avi_op2 = '';--}}
                    {{--var _count = $('#variant-swatch-1 .swatch-element').size();--}}
                    {{--$('#variant-swatch-0 .swatch-element').each(function(ind,value){--}}
                        {{--var _key = $(this).data('value');--}}
                        {{--var _unavi = 0;--}}
                        {{--$('.single-option-selector').eq(0).val(_key).change();--}}
                        {{--$('#variant-swatch-1 .swatch-element').each(function(i,v){--}}
                            {{--var _val = $(this).data('value');--}}
                            {{--$('.single-option-selector').eq(1).val(_val).change();--}}
                            {{--if(check_variant == true){--}}
                                {{--if(_avi_op1 == ''){--}}
                                    {{--_avi_op1 = _key;--}}
                                {{--}--}}
                                {{--if(_avi_op2 == ''){--}}
                                    {{--_avi_op2 = _val;--}}
                                {{--}--}}
                            {{--}else{--}}
                                {{--_unavi += 1;--}}
                            {{--}--}}
                        {{--})--}}
                        {{--if(_unavi == _count){--}}
                            {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');--}}
                            {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');--}}
                        {{--}--}}
                    {{--})--}}
                    {{--$('#variant-swatch-1 .swatch-element[data-value = "'+_avi_op2+'"] input').click();--}}
                    {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();--}}
                {{--}else if(swatch_size == 3){--}}
                    {{--var _avi_op1 = '';--}}
                    {{--var _avi_op2 = '';--}}
                    {{--var _avi_op3 = '';--}}
                    {{--var _size_op2 = $('#variant-swatch-1 .swatch-element').size();--}}
                    {{--var _size_op3 = $('#variant-swatch-2 .swatch-element').size();--}}

                    {{--$('#variant-swatch-0 .swatch-element').each(function(ind,value){--}}
                        {{--var _key_va1 = $(this).data('value');--}}
                        {{--var _count_unavi = 0;--}}
                        {{--$('.single-option-selector').eq(0).val(_key_va1).change();--}}
                        {{--$('#variant-swatch-1 .swatch-element').each(function(i,v){--}}
                            {{--var _key_va2 = $(this).data('value');--}}
                            {{--var _unavi_2 = 0;--}}
                            {{--$('.single-option-selector').eq(1).val(_key_va2).change();--}}
                            {{--$('#variant-swatch-2 .swatch-element').each(function(j,z){--}}
                                {{--var _key_va3 = $(this).data('value');--}}
                                {{--$('.single-option-selector').eq(2).val(_key_va3).change();--}}
                                {{--if(check_variant == true){--}}
                                    {{--if(_avi_op1 == ''){--}}
                                        {{--_avi_op1 = _key_va1;--}}
                                    {{--}--}}
                                    {{--if(_avi_op2 == ''){--}}
                                        {{--_avi_op2 = _key_va2;--}}
                                    {{--}--}}
                                    {{--if(_avi_op3 == ''){--}}
                                        {{--_avi_op3 = _key_va3;--}}
                                    {{--}--}}
                                {{--}else{--}}
                                    {{--_unavi_2 += 1;--}}
                                {{--}--}}
                            {{--})--}}
                            {{--if(_unavi_2 == _size_op3){--}}
                                {{--_count_unavi += 1;--}}
                            {{--}--}}
                        {{--})--}}
                        {{--if(_size_op2 == _count_unavi){--}}
                            {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').addClass('soldout');--}}
                            {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').find('input').attr('disabled','disabled');--}}
                        {{--}--}}
                    {{--})--}}
                    {{--$('#variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();--}}
                {{--}--}}
            {{--})--}}
        {{--</script>--}}
    </section>
@endsection
