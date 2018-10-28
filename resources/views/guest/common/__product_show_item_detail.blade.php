<?php
    use App\Common\Constant;
    use App\Common\AppCommon;
?>
<div class="itemProduct col-md-3 col-sm-12 col-xs-12 plr-10">
    <div class="pdLoopItem animated zoomIn">
        <div class="itemLoop clearfix">
            <div class="pdLoopImg elementFixHeight">
                @if($product->product_sale_percent != 0)
                    <div class="pdLabel sale">
                        <span>- {{$product->product_sale_percent}}%</span>
                    </div>
                @endif

                <a href="{{route('product_detail',['slug' => $product->slug, 'id' => $product->id])}}" title="{{$product->product_name}}">
                    <img alt="{{$product->product_name}}" data-reg="true" class="imgLoopItem"
                         src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image)}}" style="width: auto;">
                </a>
                <div class="pdLoopAction hidden-sm hidden-xs">
                    <div class="listAction">
                        <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="{{$product->id}}" title="Thêm vào giỏ">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span>
                        </a>
                        <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view',['slug' => $product->slug,'id' => $product->id])}}"
                           data-toggle="tooltip" data-placement="left" title="Xem nhanh">
                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pdLoopDetail text-center clearfix">
                <h3 class="pdLoopName">
                    <a class="productName" href="{{route('product_detail',['slug' => $product->slug,'id' => $product->id])}}" title="{{$product->product_name}}">{{$product->product_name}}</a>
                </h3>
                <p class="pdPrice">

                    <span>
                        @if($product->product_price != 0)
                            {{AppCommon::formatMoney($product->product_price)}}₫
                        @else
                            Liên hệ để xem giá
                        @endif
                    </span>
                    <del class="pdComparePrice">
                        @if($product->product_cost_price != 0)
                            {{AppCommon::formatMoney($product->product_cost_price)}}₫
                        @endif
                    </del>
                </p>
                <div class="pdLoopListView">
                    <ul class="notStyle">
                        <li><strong>Mã sản phẩm: </strong><span>{{$product->product_code}}</span></li>
                        <li><strong>Thương hiệu: </strong><span></span></li>
                        <li><strong>Mô tả ngắn: </strong>
                            <span class="short-des">
							    {{$product->product_description}}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
