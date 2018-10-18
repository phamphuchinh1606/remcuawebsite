<section id="homeProductBlock-2" class="control-block pdHomeBlock">
    <div class="container">
        <div class="row">
            <!-- BlockProduct2 _ Slide Banner & Product -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 homeBlockLeft">
                <div class="wrapperBlockProduct">
                    <div class="homeBannerProduct blockslidebanner">

                        <!-- settings banner slide -->
                        <div class="item_banner imageHover">
                            <a href="#">
                                <img src="{{asset('/images/guest/product_block/home_block_2.jpg')}}" alt="#"/>
                            </a>
                        </div>
                        <!-- settings banner slide -->
                        <!-- settings banner slide -->
                    </div>
                    <div class="heading-product">
						<span class="holder_header">
							<span class="line_title"></span>
						</span>
                        <h4>Ví Da Thời Trang Nam</h4>
                        <span class="holder_header">
							<span class="line_title"></span>
						</span>
                    </div>
                    <div class="woocommerce">
                        <?php
                        $arrayProduct = [];
                        for($i = 1; $i <= 5 ; $i++){
                            $product = new ArrayObject();
                            $product->product_name = 'Ví khắc tên ' . $i;
                            $product->product_price = number_format($i*100000);
                            $product->product_price_sale = number_format($i*120000);
                            $product->image = '/images/guest/product/vinam/product_'.$i.'.jpg';
                            array_push($arrayProduct,$product);
                        }
                        ?>
                        <div class="homeSlideProduct owlDesign notDots">
                            @foreach($arrayProduct as $product)
                                @include('guest.common.__product_show_item',['product' => $product])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- BlockPromotion2 & Banner Ads -->
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs homeBlockRight">

                <div class="block-promotion">


                    <div class="pdLoopItem animated zoomIn">
                        <div class="itemLoop clearfix">
                            <div class="pdLoopImg elementFixHeight">
                                <div class="deal-clock lof-clock-1009687436-detail"></div>

                                <div class="pdLabel sale">
                                    <span>- 40%</span>
                                </div>


                                <a href="/products/ao-so-mi-dai-tay-aristino-als021"
                                   title="Áo sơ mi dài tay Aristino ALS021">
                                    <img alt="Áo sơ mi dài tay Aristino ALS021" data-reg="false"
                                         class="imgLoopItem" style="height: 278px;"
                                         src="{{asset('/images/guest/product_sale_hot_2.jpg')}}"/>

                                </a>
                                <div class="pdLoopAction hidden">
                                    <div class="listAction">
                                        <a href="javascript:void(0)" class="add-cart btnLoop Addcart"
                                           data-variantid="1019623662" title="Thêm vào giỏ"><i
                                                    class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                        <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1"
                                           data-handle="/products/ao-so-mi-dai-tay-aristino-als021"
                                           data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i
                                                    class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pdLoopDetail text-center clearfix">
                                <h3 class="pdLoopName"><a class="productName"
                                                          href="/products/ao-so-mi-dai-tay-aristino-als021"
                                                          title="Áo sơ mi dài tay Aristino ALS021">Áo sơ mi dài
                                        tay Aristino ALS021 </a></h3>
                                <p class="pdPrice">

                                    <span>339,000₫</span>
                                    <del class="pdComparePrice">565,000₫</del>

                                </p>
                            </div>
                        </div>
                        <script>
                            jQuery(document).ready(function ($) {
                                jQuery(".lof-clock-1009687436-detail").lofCountDown({
                                    TargetDate: "10/30/2018 12:00:00",
                                    DisplayFormat: "<ul class='list-inline'><li class='day'>%%D%%<span>ngày</span></li><li>%%H%%<span>giờ</span></li><li>%%M%%<span>phút</span></li><li>%%S%%<span>giây</span></li></ul>",
                                    FinishMessage: "<ul class='list-inline outTime'><li>Hết hạn</li></ul>"
                                });
                            });
                        </script>
                    </div>
                </div>


                <div class="block-ads imageHover">
                    <a href="#">
                        <img alt="#" style="height: 177px"
                             src="{{asset('./images/guest/vinam2018.png')}}"/>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>