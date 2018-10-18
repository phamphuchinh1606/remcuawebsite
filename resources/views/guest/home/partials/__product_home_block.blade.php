<section class="control-block pdHomeBlock">
    <div class="container">
        <div class="row">
            <!-- BlockProduct1 _ Slide Banner & Product -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 homeBlockLeft">
                <div class="wrapperBlockProduct">
                    <div class="heading-product">
						<span class="holder_header">
							<span class="line_title orange"></span>
						</span>
                        <h4>{{$blockHeader}}</h4>
                        <span class="holder_header">
							<span class="line_title orange"></span>
						</span>
                    </div>
                    <div class="woocommerce product-list">
                        <div class="row">
                            @foreach($productHots as $product)
                                @include('guest.common.__product_show_item_detail',['product' => $product])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- BlockPromotion1 & Banner Ads -->
            {{--<div class="col-lg-3 col-md-3 hidden-sm hidden-xs homeBlockRight">--}}

                {{--<div class="block-promotion">--}}


                    {{--<div class="pdLoopItem animated zoomIn">--}}
                        {{--<div class="itemLoop clearfix">--}}
                            {{--<div class="pdLoopImg elementFixHeight">--}}
                                {{--<div class="deal-clock lof-clock-1009687450-detail"></div>--}}

                                {{--<div class="pdLabel sale">--}}
                                    {{--<span>- 44%</span>--}}
                                {{--</div>--}}


                                {{--<a href="/products/giay-sandal-7cm-mui-tron-quai-ngang-manh-sd07013"--}}
                                   {{--title="Giày Sandal 7cm mũi tròn quai ngang mảnh SD07013">--}}
                                    {{--<img alt="Giày Sandal 7cm mũi tròn quai ngang mảnh SD07013" data-reg="false"--}}
                                         {{--class="imgLoopItem"--}}
                                         {{--src="{{asset('/images/guest/product_sale_hot.jpg')}}"/>--}}

                                {{--</a>--}}
                                {{--<div class="pdLoopAction hidden">--}}
                                    {{--<div class="listAction">--}}
                                        {{--<a href="javascript:void(0)" class="add-cart btnLoop Addcart"--}}
                                           {{--data-variantid="1019623682" title="Thêm vào giỏ"><i--}}
                                                    {{--class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>--}}
                                        {{--<a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1"--}}
                                           {{--data-handle="/products/giay-sandal-7cm-mui-tron-quai-ngang-manh-sd07013"--}}
                                           {{--data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i--}}
                                                    {{--class="fa fa-search-plus" aria-hidden="true"></i></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="pdLoopDetail text-center clearfix">--}}
                                {{--<h3 class="pdLoopName"><a class="productName"--}}
                                                          {{--href="/products/giay-sandal-7cm-mui-tron-quai-ngang-manh-sd07013"--}}
                                                          {{--title="Giày Sandal 7cm mũi tròn quai ngang mảnh SD07013">Sẩn phẩm yêu thích </a></h3>--}}
                                {{--<p class="pdPrice">--}}

                                    {{--<span>270,000₫</span>--}}
                                    {{--<del class="pdComparePrice">480,000₫</del>--}}

                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<script>--}}
                            {{--jQuery(document).ready(function ($) {--}}
                                {{--jQuery(".lof-clock-1009687450-detail").lofCountDown({--}}
                                    {{--TargetDate: "12/30/2018 06:00:00",--}}
                                    {{--DisplayFormat: "<ul class='list-inline'><li class='day'>%%D%%<span>ngày</span></li><li>%%H%%<span>giờ</span></li><li>%%M%%<span>phút</span></li><li>%%S%%<span>giây</span></li></ul>",--}}
                                    {{--FinishMessage: "<ul class='list-inline outTime'><li>Hết hạn</li></ul>"--}}
                                {{--});--}}
                            {{--});--}}
                        {{--</script>--}}
                    {{--</div>--}}
                {{--</div>--}}


                {{--<div class="block-ads imageHover">--}}
                    {{--<a href="/collections/all">--}}
                        {{--<img alt="alt" style="height: 177px;"--}}
                             {{--src="{{asset('/images/guest/img_banner_ads_2.jpg')}}"/>--}}
                    {{--</a>--}}
                {{--</div>--}}

            {{--</div>--}}
        </div>
    </div>
</section>
