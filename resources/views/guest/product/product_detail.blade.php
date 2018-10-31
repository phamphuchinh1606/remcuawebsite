<?php use App\Common\Constant; use App\Common\AppCommon; ?>

@extends('guest.layouts.master')

@section('head.title', $product->product_name)

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
    <link href='{{ asset('/css/guest/plugins/jquery.fancybox.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
    <link href="{{asset('/css/admin/plugins/quill.snow.css')}}" rel="stylesheet">
    <style>
        .pdHomeBlock .block-menu-right{
            background: #fff;
        }
    </style>
@endsection

@section('template','product')

@section('head.init_js')
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
                                                                <span id="pdPriceNumber">
                                                                    @if($product->product_price != 0)
                                                                        {{AppCommon::formatMoney($product->product_price)}}₫
                                                                    @else
                                                                        Liên hệ để biết giá
                                                                    @endif

                                                                </span>
                                                            </p>
                                                            @if(isset($product->product_cost_price) && $product->product_cost_price!= 0)
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
                                                                {{\App\Common\AppCommon::showTextDot($product->product_description,200)}}
                                                            </div>

                                                        </div>
                                                        <div class="actionCart">
                                                            <div class="select clearfix" style="display:none">
                                                                <select id="product-select" name="id">

                                                                    <option value="{{$product->id}}">Trắng / M - 339,000₫</option>

                                                                    <option value="{{$product->id}}">Đen / M - 339,000₫</option>

                                                                    <option value="{{$product->id}}">Xanh / M - 339,000₫</option>

                                                                    <option value="{{$product->id}}">Trắng / L - 339,000₫</option>

                                                                    <option value="{{$product->id}}">Trắng / XL - 339,000₫</option>

                                                                </select>
                                                            </div>
                                                            <div class="groupQty">
                                                                <button type="button" class="qtyControl minus">-</button>
                                                                <input type="number" maxlength="12" min="1" class="input-text qty" title="Số lượng" size="2" value="1" name="Lines" id="pdQuantity">
                                                                <button type="button" class="qtyControl plus">+</button>
                                                            </div>
                                                            <div class="listAction">
                                                                <button type="button" class="button btn-outline btn-addCart">
                                                                    <span>Thêm vào giỏ</span>
                                                                </button>
                                                                {{--<button type="button" class="button btn-outline btn-Buynow ">--}}
                                                                    {{--<span>Mua ngay</span>--}}
                                                                {{--</button>--}}
                                                                {{--<a href="javascript:void(0)" class="button btn-outline btn-Soldout hidden">Hết hàng</a>--}}
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
                                        <div class="content ql-editor">
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
                            {{--Left Module Tag One--}}
                            <div class="block left-module product">
                                <p class="title_block">Tags</p>
                            </div>
                            <div class="sing_right_widget pdHomeBlock" style="padding: 0px">
                                @include('guest.common.__tag_key_one')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
