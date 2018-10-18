<section id="homeProductBlock-4" class="control-block pdHomeBlock">
    <div class="container">
        <div class="row">
            <!-- BlockProduct4 _ Slide Banner & Product -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 homeBlockLeft">
                <div class="wrapperBlockProduct">
                    <div class="homeBannerProduct blockslidebanner">

                        <!-- settings banner slide -->


                        <div class="item_banner imageHover">
                            <a href="#">
                                <img src="{{asset('./images/guest/product_block/home_block_4.jpg')}}" alt="#"
                                     style="background-color: currentColor"/>
                            </a>
                        </div>
                        <!-- settings banner slide -->
                        <!-- settings banner slide -->
                    </div>
                    <div class="heading-product">
						<span class="holder_header">
							<span class="line_title"></span>
						</span>
                        <h4>Thời Trang Da Cá Sấu</h4>
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
                            $product->image = './images/guest/product/dacasau/product_casau_'.$i.'.jpg';
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
            <!-- BlockPromotion4 & Banner Ads -->
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs homeBlockRight">

                <div class="block-promotion">


                    <div class="pdLoopItem animated zoomIn">
                        <div class="itemLoop clearfix">
                            <div class="pdLoopImg elementFixHeight">
                                <div class="deal-clock lof-clock-1009725605-detail"></div>

                                <div class="pdLabel sale">
                                    <span>- 4%</span>
                                </div>


                                <a href="/products/ao-khoac-dai-hien-dai" title="Áo khoác dài hiện đại">
                                    <img alt="Áo khoác dài hiện đại" data-reg="false" class="imgLoopItem"
                                         style="height: 278px"
                                         src="{{asset('/images/guest/product_sale_hot_3.jpg')}}"/>

                                </a>
                                <div class="pdLoopAction hidden">
                                    <div class="listAction">
                                        <a href="javascript:void(0)" class="add-cart btnLoop Addcart"
                                           data-variantid="1019673633" title="Thêm vào giỏ"><i
                                                    class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                        <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1"
                                           data-handle="/products/ao-khoac-dai-hien-dai" data-toggle="tooltip"
                                           data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus"
                                                                                      aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pdLoopDetail text-center clearfix">
                                <h3 class="pdLoopName"><a class="productName"
                                                          href="/products/ao-khoac-dai-hien-dai"
                                                          title="Áo khoác dài hiện đại">Ví nam hiện đại</a></h3>
                                <p class="pdPrice">

                                    <span>2,400,000₫</span>
                                    <del class="pdComparePrice">2,500,000₫</del>

                                </p>
                            </div>
                        </div>
                        <script>
                            jQuery(document).ready(function ($) {
                                jQuery(".lof-clock-1009725605-detail").lofCountDown({
                                    TargetDate: "09/10/2018 15:00:00",
                                    DisplayFormat: "<ul class='list-inline'><li class='day'>%%D%%<span>ngày</span></li><li>%%H%%<span>giờ</span></li><li>%%M%%<span>phút</span></li><li>%%S%%<span>giây</span></li></ul>",
                                    FinishMessage: "<ul class='list-inline outTime'><li>Hết hạn</li></ul>"
                                });
                            });
                        </script>
                    </div>
                </div>


                <div class="block-ads imageHover">
                    <a href="#">
                        <img alt="#"
                             src="https://theme.hstatic.net/1000244873/1000313408/14/img_banner_ads_4.png?v=1543"/>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>