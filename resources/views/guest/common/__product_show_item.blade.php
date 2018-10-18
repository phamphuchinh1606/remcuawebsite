<div class="item">
    <div class="pdLoopItem animated zoomIn">
        <div class="itemLoop clearfix">
            <div class="pdLoopImg elementFixHeight">
                <div class="pdLabel sale">
                    <span>- {{$product->product_sale_percent}}%</span>
                </div>


                <a href="{{route('product_detail',['id' => $product->id])}}"
                   title="{{$product->product_name}}">
                    <img alt="{{$product->product_name}}" data-reg="false"
                         class="imgLoopItem" src="{{asset(\App\Common\Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image)}}"/>
                </a>
                <div class="pdLoopAction hidden-sm hidden-xs">
                    <div class="listAction">
                        <a href="javascript:void(0)"
                           class="add-cart btnLoop Addcart"
                           data-variantid="{{$product->id}}" title="Thêm vào giỏ"><i
                                    class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <span>Thêm vào giỏ</span>
                        </a>
                        <a href="javascript:void(0)"
                           class="btnLoop btnQickview btn-quickview-1"
                           data-handle="{{route('product.quick_view',['id' => $product->id])}}"
                           data-toggle="tooltip" data-placement="left"
                           title="Xem nhanh">
                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pdLoopDetail text-center clearfix">
                <h3 class="pdLoopName">
                    <a class="productName" href="{{route('product_detail',['id' => $product->id])}}"
                       title="Áo sơ mi Aristino ASS17-MO57">
                        {{$product->product_name}}
                    </a>
                </h3>
                <p class="pdPrice">

                    <span>{{$product->product_price}}₫</span>
                    <del class="pdComparePrice">{{$product->product_cost_price}}₫</del>
                </p>
                <div class="pdLoopListView">
                    <ul class="notStyle">
                        <li><strong>Mã sản phẩm: </strong><span>{{$product->product_code}}</span></li>
                        <li><strong>Thương hiệu: </strong><span>Aristino</span></li>
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