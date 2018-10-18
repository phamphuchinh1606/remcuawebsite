<section id="homeProductBlock-3" class="control-block pdHomeBlock">
    <div class="container">
        <div class="row">
            <!-- BlockProduct3 _ Slide Banner & Product -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 homeBlockLeft">
                <div class="wrapperBlockProduct">
                    <div class="homeBannerProduct blockslidebanner">

                        <!-- settings banner slide -->


                        <div class="item_banner imageHover">
                            <a href="#">
                                <img src="{{asset('./images/guest/product_block/home_block_3.jpg')}}" alt="#"/>
                            </a>
                        </div>
                        <!-- settings banner slide -->
                        <!-- settings banner slide -->
                    </div>
                    <div class="heading-product">
						<span class="holder_header">
							<span class="line_title"></span>
						</span>
                        <h4>Sản Phẩm Mới</h4>
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
                            $product->image = '/images/guest/product/product_hot/product_hot_'.$i.'.jpg';
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
            <!-- BlockPromotion3 & Banner Ads -->
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs homeBlockRight">
                {{--Block Menu Right--}}
                @include('guest.common.__tag_key_one')

                <div class="block-ads imageHover">
                    <a href="#">
                        <img alt="#"
                             src="https://theme.hstatic.net/1000244873/1000313408/14/img_banner_ads_3.png?v=1543"/>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>