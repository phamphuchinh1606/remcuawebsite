@extends('guest.layouts.master')

@section('head.title','Product Detail')

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
    <link href='{{ asset('/css/guest/plugins/jquery.fancybox.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
@endsection

@section('template','product')

@section('head.init_js')
    <script type='text/javascript'>
        window.HaravanAnalytics = window.HaravanAnalytics || {};
        window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
        window.HaravanAnalytics.meta.currency = 'VND';
        var meta = {"page":{"pageType":"product","resourceType":"product","resourceId":1009687436},"product":{"id":1009687436,"type":"Quần áo","title":"Áo sơ mi dài tay Aristino ALS021","price":33900000.0,"selected_or_first_available_variant":{"id":1019623662,"price":33900000.0,"title":"Áo sơ mi dài tay Aristino ALS021 - Trắng / M","sku":"STMF-04","variant_title":"Trắng / M"},"vendor":"Aristino","imageUrl":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","available":true}};
        for (var attr in meta) {
            window.HaravanAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script async src='{{asset('js/guest/plugins/haravan-analytics.min.js?v=3')}}' type='text/javascript'></script>
@endsection

@section('body.js')
    <script src='{{asset('js/guest/plugins/jquery.fancybox.js?v=1543')}}' type='text/javascript'></script>

@endsection

@section('body.content')
    <section id="insProductPage" class="tamplateSection">
        {{--Breadcrumb--}}
        @include('guest.common.__breadcrumb_show')

        <div class="container">
            <div class="wrapperPdPage">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12" id="pdWrapDetail">
                        <div class="pdBlockDetail pdFirstInfo">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 pdImages">
                                    <div class="wrapperPdImage clearfix">

                                        <?php
                                        $arrayImages = [];
                                        for($i = 1; $i <= 5 ; $i++){
                                            $image = new ArrayObject();
                                            $image->image = '/images/guest/product_detail/detail_'.$i.'.jpg';
                                            $image->image_name = 'Ví da khắc tên '. $i;
                                            array_push($arrayImages,$image);
                                        }
                                        ?>
                                        <div id="leftThumbsImg" class="pdImgThumbs pull-left">
                                            <ul class="listThumbs notStyle">
                                                @foreach($arrayImages as $image)
                                                    <li class="imgThumb">
                                                        <a href="javascript:void(0)" data-fancybox="{{asset($image->image)}}" data-image="{{asset($image->image)}}">
                                                            <img alt="{{$image->image_name}}" src="{{asset($image->image)}}" >
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        {{--<div id="leftThumbsImg" class="pdImgThumbs pull-left">--}}
                                            {{--<ul class="listThumbs notStyle">--}}

                                                {{--<li class="imgThumb active">--}}
                                                    {{--<a href="javascript:void(0)" data-fancybox="./images/product_detail/detail_1.jpg" data-image="./images/product_detail/detail_1.jpg">--}}
                                                        {{--<img alt="Áo sơ mi dài tay Aristino ALS021" src="./images/product_detail/detail_1.jpg" >--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}

                                                {{--<li class="imgThumb ">--}}
                                                    {{--<a href="javascript:void(0)" data-fancybox="./images/product_detail/detail_2.jpg" data-image="./images/product_detail/detail_2.jpg">--}}
                                                        {{--<img alt="Áo sơ mi dài tay Aristino ALS021" src="./images/product_detail/detail_2.jpg" >--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}

                                                {{--<li class="imgThumb ">--}}
                                                    {{--<a href="javascript:void(0)" data-fancybox="./images/product_detail/detail_3.jpg" data-image="./images/product_detail/detail_3.jpg">--}}
                                                        {{--<img alt="Áo sơ mi dài tay Aristino ALS021" src="./images/product_detail/detail_3.jpg" >--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="imgThumb ">--}}
                                                    {{--<a href="javascript:void(0)" data-fancybox="./images/product_detail/detail_4.jpg" data-image="./images/product_detail/detail_4.jpg">--}}
                                                        {{--<img alt="Áo sơ mi dài tay Aristino ALS021" src="./images/product_detail/detail_4.jpg" >--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="imgThumb ">--}}
                                                    {{--<a href="javascript:void(0)" data-fancybox="./images/product_detail/detail_5.jpg" data-image="./images/product_detail/detail_5.jpg">--}}
                                                        {{--<img alt="Áo sơ mi dài tay Aristino ALS021" src="./images/product_detail/detail_5.jpg" >--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}

                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        <div id="imgFeatured" class="featureImg pull-left">
                                            <a class="pdFancybox" href="https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004_master.jpg">
                                                <img alt="Áo sơ mi dài tay Aristino ALS021" src="{{asset('/images/guest/product_detail/detail_1.jpg')}}" >
                                            </a>
                                        </div>
                                        <script src='{{asset('js/guest/product/product_detail.js?v=1543')}}' type='text/javascript'></script>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pdInfo">
                                    <div class="wrapPdInfo">
                                        <h1 class="title pdTitle">
                                            Ví nam cao cấp khắc họa tiết cao cấp VS021
                                        </h1>
                                        <div class="pdBox listInfoDesc">
                                            <ul>
                                                <li class="vendor"><i class="fa fa-gg" aria-hidden="true"></i> Thương hiệu: <span>Aristino</span> </li>
                                                <li class="type"><i class="fa fa-tags" aria-hidden="true"></i> Loại: <span>Ví nam</span> </li>
                                                <li class="sku"><i class="fa fa-codepen" aria-hidden="true"></i> SKU: <span>STMF-04</span> </li>
                                            </ul>
                                        </div>
                                        <div class="pdBox pdPriceBoxInfo">
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12 pdBlockInfo pdPriceWrap">
                                                    <div class="wrapBlockInfo">

                                                        <div class="pdPrice">
                                                            <p class="item price">
                                                                <span class="pdLabelPrice">Tại phương anh: </span>
                                                                <span id="pdPriceNumber">339,000₫</span>
                                                            </p>
                                                            <p class="item comparePrice ">
                                                                <span class="pdLabelPrice">Giá thị trường: </span>
                                                                <span id="pdComparePriceNumber">565,000₫</span>
                                                            </p>
                                                            <p class="item compareSaleOff ">
                                                                <span class="pdLabelPrice">Tiết kiệm: </span>
                                                                <span id="pdCompareSalePrice">226,000₫ </span>
                                                                <span id="pdCompareSaleOff">-40%</span>
                                                            </p>
                                                        </div>

                                                        <div class="shortDesc">

                                                            <div class="desc">
                                                                Bạn đang quan tâm đến ví da khắc tên! Thế bạn có biết những gì người ta thường hay khắc trên ví da không?
                                                                Có vô số thứ người ta có thể khắc lên ví, vậy thì nên khắc chữ gì lên ví da? Nào là tên, ảnh chân dung, 12 con giáp, logo công an,… đều khắc được cả.
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
                                                            <div class="select-swatch">
                                                                <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                                                                    <div class="header">Màu sắc</div>
                                                                    <div class="select-swap">
                                                                        <div data-value="Trắng" class="n-sd swatch-element color trang ">
                                                                            <input class="variant-0" id="swatch-0-trang" type="radio" name="option1" value="Trắng" checked />
                                                                            <label class="trang has-thumb" for="swatch-0-trang" style="background: url('{{asset('/images/guest/product_detail/detail_1.jpg')}}') top left no-repeat " >

                                                                                <img class="crossed-out" src="https://theme.hstatic.net/1000244873/1000313408/14/soldout.png?v=1543" />
                                                                                <img class="img-check" src="https://theme.hstatic.net/1000244873/1000313408/14/select-pro.png?v=1543" />
                                                                            </label>
                                                                        </div>
                                                                        <div data-value="Đen" class="n-sd swatch-element color den ">
                                                                            <input class="variant-0" id="swatch-0-den" type="radio" name="option1" value="Đen" />
                                                                            <label class="den has-thumb" for="swatch-0-den" style="background: url('{{asset('./images/guest/product_detail/detail_2.jpg')}}') top left no-repeat " >

                                                                                <img class="crossed-out" src="https://theme.hstatic.net/1000244873/1000313408/14/soldout.png?v=1543" />
                                                                                <img class="img-check" src="https://theme.hstatic.net/1000244873/1000313408/14/select-pro.png?v=1543" />
                                                                            </label>
                                                                        </div>
                                                                        <div data-value="Xanh" class="n-sd swatch-element color xanh ">
                                                                            <input class="variant-0" id="swatch-0-xanh" type="radio" name="option1" value="Xanh" />
                                                                            <label class="xanh has-thumb" for="swatch-0-xanh" style="background: url('{{asset('./images/guest/product_detail/detail_3.jpg')}}') top left no-repeat " >

                                                                                <img class="crossed-out" src="https://theme.hstatic.net/1000244873/1000313408/14/soldout.png?v=1543" />
                                                                                <img class="img-check" src="https://theme.hstatic.net/1000244873/1000313408/14/select-pro.png?v=1543" />
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="variant-swatch-1" class="swatch clearfix" data-option="option2" data-option-index="1">
                                                                    <div class="header">Kích thước</div>
                                                                    <div class="select-swap">
                                                                        <div data-value="M" class="n-sd swatch-element m ">
                                                                            <input class="variant-1" id="swatch-1-m" type="radio" name="option2" value="M" checked />
                                                                            <label for="swatch-1-m">
                                                                                M
                                                                                <img class="crossed-out" src="https://theme.hstatic.net/1000244873/1000313408/14/soldout.png?v=1543" />
                                                                                <img class="img-check" src="https://theme.hstatic.net/1000244873/1000313408/14/select-pro.png?v=1543" />
                                                                            </label>
                                                                        </div>
                                                                        <div data-value="L" class="n-sd swatch-element l ">
                                                                            <input class="variant-1" id="swatch-1-l" type="radio" name="option2" value="L" />
                                                                            <label for="swatch-1-l">
                                                                                L
                                                                                <img class="crossed-out" src="https://theme.hstatic.net/1000244873/1000313408/14/soldout.png?v=1543" />
                                                                                <img class="img-check" src="https://theme.hstatic.net/1000244873/1000313408/14/select-pro.png?v=1543" />
                                                                            </label>

                                                                        </div>
                                                                        <div data-value="XL" class="n-sd swatch-element xl ">
                                                                            <input class="variant-1" id="swatch-1-xl" type="radio" name="option2" value="XL" />

                                                                            <label for="swatch-1-xl">
                                                                                XL
                                                                                <img class="crossed-out" src="https://theme.hstatic.net/1000244873/1000313408/14/soldout.png?v=1543" />
                                                                                <img class="img-check" src="https://theme.hstatic.net/1000244873/1000313408/14/select-pro.png?v=1543" />
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                            <p style="text-align: justify;" data-mce-style="text-align: justify;"><strong>Chi tiết</strong>:</p>
                                            <p style="text-align: justify;" data-mce-style="text-align: justify;">
                                                <span style="color: #ff6600;">1. Mua ví da khắc chữ ở đâu</span>
                                                Nhiều nơi bán bóp (như bên Leorno của mình ^^) có kèm dịch vụ khắc tên – có thể miễn phí hoặc tính phí. Bạn có thể mua ví và yêu cầu được khắc.
                                                Ngoài ra còn có thể tự đem ví của mình đến các tiệm laser gần nhà (lên google tìm nhé, có rất nhiều). Chi phí dao động từ 50 – 100.000 / lần khắc.

                                            </p>
                                            <p>
                                                <span style="color: #ff6600;">2.&nbsp;Chất liệu ví được khắc</span>
                                                Có thể là bóp da thật, giả da (thường gặp nhất là da bò). Tất nhiên là da bò thật thì sẽ bền và sang hơn ví giả da rồi. Các loại ví da khắc tên giá rẻ thường gặp là ví may bằng máy hoặc simily, tuổi thọ kém hơn so với may tay.

                                                Kiểu may cũng có thể là ví da handmade khắc tên – PHỔ BIẾN NHẤT, cũng có thể may bằng máy, hoặc may bán thủ công (may toàn bộ bằng máy, chỉ có đường viền may tay), hoặc may máy giả thủ công (may máy nhưng kiểu dáng của thủ công).
                                            </p>
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
                                            <div class="itemProduct col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="pdLoopItem animated zoomIn">
                                                    <div class="itemLoop clearfix">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <div class="pdLabel sale">
                                                                <span>- 17%</span>
                                                            </div>
                                                            <a href="/products/ao-hoodie-nu-chu-theu-thoi-trang-sid53235" title="Áo hoodie nữ chữ thêu thời trang SID53235">
                                                                <img alt="Áo hoodie nữ chữ thêu thời trang SID53235" data-reg="true" class="imgLoopItem" src="{{asset('./images/guest/product_detail/product_same_type_1.jpg')}}" style="width: auto;">
                                                            </a>
                                                            <div class="pdLoopAction hidden-sm hidden-xs">
                                                                <div class="listAction">
                                                                    <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="1019674046" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                                                    <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view')}}" data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/ao-hoodie-nu-chu-theu-thoi-trang-sid53235" title="Áo hoodie nữ chữ thêu thời trang SID53235">Ví da cao cấp 01</a></h3>
                                                            <p class="pdPrice">

                                                                <span>380,000₫</span>
                                                                <del class="pdComparePrice">460,000₫</del>

                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>H&amp;M</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

							Áo hoodie nữ chữ thêu thời trang có thiết kế thời trang phối nón vô cùng tinh tế giúp bạn gái tự tin và trẻ trung hơn trong mọi hoạt động hằng ngàyDáng áo vừa vặn, phần thân và tay có bo gấu và phối màu trẻ trung vô cùng thu hútPhần cổ có dây cột điệu đà, trước ngực có họa tiết chữ độc đáo và năng độngMàu sắc đa dạng để bạn có thể thoải mái lựa chọn theo sở thích cũng như phối với style riêng của mìnhChất liệu thun mềm mại, thoáng mát, thấm hút mồ hôi...


						                                                </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemProduct col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="pdLoopItem animated zoomIn">
                                                    <div class="itemLoop clearfix">
                                                        <div class="pdLoopImg elementFixHeight">

                                                            <div class="pdLabel sale">
                                                                <span>- 25%</span>
                                                            </div>


                                                            <a href="/products/ao-hoodie-nu-theu-slogan-de-thuong-sid54770-1" title="Áo hoodie nữ thêu slogan dễ thương SID54770">
                                                                <img alt="Áo hoodie nữ thêu slogan dễ thương SID54770" data-reg="true" class="imgLoopItem" src="{{asset('./images/guest/product_detail/product_same_type_2.jpg')}}" style="width: auto;">
                                                            </a>
                                                            <div class="pdLoopAction hidden-sm hidden-xs">
                                                                <div class="listAction">
                                                                    <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="1019676558" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                                                    <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view')}}" data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/ao-hoodie-nu-theu-slogan-de-thuong-sid54770-1" title="Áo hoodie nữ thêu slogan dễ thương SID54770">Ví da cao cấp 02</a></h3>
                                                            <p class="pdPrice">

                                                                <span>299,000₫</span>
                                                                <del class="pdComparePrice">400,000₫</del>

                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>H&amp;M</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

							Áo hoodie nữ thêu slogan dễ thương có thiết kế thời trang phối nón vô cùng tinh tế giúp bạn gái tự tin và trẻ trung hơn trong mọi hoạt động hằng ngàyForm áo vừa vặn, nhấn nhá thêm phần thân và tay có bo gấu cùng họa tiết sọc khác màu trẻ trung vô cùng thu hútPhần cổ có dây cột điệu đà nhấn nhá chữ khác màu cá tính, trước ngực có họa tiết chữ độc đáo và năng độngMàu sắc đa dạng để bạn có thể thoải mái lựa chọn theo sở thích cũng như phối với style...


						</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemProduct col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="pdLoopItem animated zoomIn">
                                                    <div class="itemLoop clearfix">
                                                        <div class="pdLoopImg elementFixHeight">

                                                            <div class="pdLabel sale">
                                                                <span>- 13%</span>
                                                            </div>


                                                            <a href="/products/ao-hoodie-nu-theu-slogan-de-thuong-sid54770" title="Áo hoodie nữ thêu slogan dễ thương SID54770">
                                                                <img alt="Áo hoodie nữ thêu slogan dễ thương SID54770" data-reg="true" class="imgLoopItem" src="{{asset('./images/guest/product_detail/product_same_type_3.jpg')}}" style="width: auto;">
                                                            </a>
                                                            <div class="pdLoopAction hidden-sm hidden-xs">
                                                                <div class="listAction">
                                                                    <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="1019676480" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                                                    <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view')}}" data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/ao-hoodie-nu-theu-slogan-de-thuong-sid54770" title="Áo hoodie nữ thêu slogan dễ thương SID54770">Ví da cao cấp 03 </a></h3>
                                                            <p class="pdPrice">

                                                                <span>400,000₫</span>
                                                                <del class="pdComparePrice">460,000₫</del>

                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>H&amp;M</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

							Áo hoodie nữ thêu slogan dễ thương có thiết kế thời trang phối nón vô cùng tinh tế giúp bạn gái tự tin và trẻ trung hơn trong mọi hoạt động hằng ngàyForm áo vừa vặn, nhấn nhá thêm phần thân và tay có bo gấu cùng họa tiết sọc khác màu trẻ trung vô cùng thu hútPhần cổ có dây cột điệu đà nhấn nhá chữ khác màu cá tính, trước ngực có họa tiết chữ độc đáo và năng độngMàu sắc đa dạng để bạn có thể thoải mái lựa chọn theo sở thích cũng như phối với style...


						</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemProduct col-md-3 col-sm-6 col-xs-6 ">

                                                <div class="pdLoopItem animated zoomIn">
                                                    <div class="itemLoop clearfix">
                                                        <div class="pdLoopImg elementFixHeight">

                                                            <div class="pdLabel sale">
                                                                <span>- 16%</span>
                                                            </div>


                                                            <a href="/products/ao-khoac-cach-dieu" title="Áo khoác cách điệu">
                                                                <img alt="Áo khoác cách điệu" data-reg="true" class="imgLoopItem" src="{{asset('./images/guest/product_detail/product_same_type_4.jpg')}}" style="width: auto;">
                                                            </a>
                                                            <div class="pdLoopAction hidden-sm hidden-xs">
                                                                <div class="listAction">
                                                                    <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="1019673697" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                                                    <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view')}}" data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/ao-khoac-cach-dieu" title="Áo khoác cách điệu">Ví da cao cấp 04</a></h3>
                                                            <p class="pdPrice">

                                                                <span>670,000₫</span>
                                                                <del class="pdComparePrice">800,000₫</del>

                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Zalora</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

							Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác mềm mại, ấm áp khi mặc. Với màu sắc tối, kiểu dáng đơn giản nhưng được khéo léo phối da ở viền cổ áo và tay áo khiến bạn trông thật dịu dàng nhưng vẫn có cá tính riêng.- Chất liệu cotton- Cổ chữ V- Tay dài, gấu tay có phối da- Không có lót


						</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemProduct col-md-3 col-sm-6 col-xs-6 ">

                                                <div class="pdLoopItem animated zoomIn">
                                                    <div class="itemLoop clearfix">
                                                        <div class="pdLoopImg elementFixHeight">

                                                            <div class="pdLabel sale">
                                                                <span>- 14%</span>
                                                            </div>


                                                            <a href="/products/ao-khoac-cao-cap-px" title="Áo khoác cao cấp PX">
                                                                <img alt="Áo khoác cao cấp PX" data-reg="true" class="imgLoopItem" src="{{asset('./images/guest/product_detail/product_same_type_5.jpg')}}" style="width: auto;">
                                                            </a>
                                                            <div class="pdLoopAction hidden-sm hidden-xs">
                                                                <div class="listAction">
                                                                    <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="1019673628" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                                                    <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view')}}" data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/ao-khoac-cao-cap-px" title="Áo khoác cao cấp PX">Ví da cao cấp 05 </a></h3>
                                                            <p class="pdPrice">

                                                                <span>1,900,000₫</span>
                                                                <del class="pdComparePrice">2,200,000₫</del>

                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Zalora</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

							Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác mềm mại, ấm áp khi mặc. Với màu sắc tối, kiểu dáng đơn giản nhưng được khéo léo phối da ở viền cổ áo và tay áo khiến bạn trông thật dịu dàng nhưng vẫn có cá tính riêng.- Chất liệu cotton- Cổ chữ V- Tay dài, gấu tay có phối da- Không có lót


						</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemProduct col-md-3 col-sm-6 col-xs-6 ">

                                                <div class="pdLoopItem animated zoomIn">
                                                    <div class="itemLoop clearfix">
                                                        <div class="pdLoopImg elementFixHeight">

                                                            <div class="pdLabel sale">
                                                                <span>- 4%</span>
                                                            </div>


                                                            <a href="/products/ao-khoac-dai-hien-dai" title="Áo khoác dài hiện đại">
                                                                <img alt="Áo khoác dài hiện đại" data-reg="true" class="imgLoopItem" src="{{asset('./images/guest/product_detail/product_same_type_6.jpg')}}" style="width: auto;">
                                                            </a>
                                                            <div class="pdLoopAction hidden-sm hidden-xs">
                                                                <div class="listAction">
                                                                    <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="1019673633" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                                                    <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view')}}" data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/ao-khoac-dai-hien-dai" title="Áo khoác dài hiện đại">Ví da cao cấp 06</a></h3>
                                                            <p class="pdPrice">

                                                                <span>2,400,000₫</span>
                                                                <del class="pdComparePrice">2,500,000₫</del>

                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Zalora</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

							Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác mềm mại, ấm áp khi mặc. Với màu sắc tối, kiểu dáng đơn giản nhưng được khéo léo phối da ở viền cổ áo và tay áo khiến bạn trông thật dịu dàng nhưng vẫn có cá tính riêng.- Chất liệu cotton- Cổ chữ V- Tay dài, gấu tay có phối da- Không có lót


						</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemProduct col-md-3 col-sm-6 col-xs-6 ">

                                                <div class="pdLoopItem animated zoomIn">
                                                    <div class="itemLoop clearfix">
                                                        <div class="pdLoopImg elementFixHeight">

                                                            <div class="pdLabel sale">
                                                                <span>- 17%</span>
                                                            </div>


                                                            <a href="/products/ao-khoac-day-kieu-chau-au" title="Áo khoác dày kiểu châu âu">
                                                                <img alt="Áo khoác dày kiểu châu âu" data-reg="true" class="imgLoopItem" src="{{asset('./images/guest/product_detail/product_same_type_7.jpg')}}" style="width: auto;">
                                                            </a>
                                                            <div class="pdLoopAction hidden-sm hidden-xs">
                                                                <div class="listAction">
                                                                    <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="1019673692" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                                                    <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view')}}" data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/ao-khoac-day-kieu-chau-au" title="Áo khoác dày kiểu châu âu">Ví da cao cấp 07</a></h3>
                                                            <p class="pdPrice">

                                                                <span>1,500,000₫</span>
                                                                <del class="pdComparePrice">1,800,000₫</del>

                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Zalora</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

							Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác mềm mại, ấm áp khi mặc. Với màu sắc tối, kiểu dáng đơn giản nhưng được khéo léo phối da ở viền cổ áo và tay áo khiến bạn trông thật dịu dàng nhưng vẫn có cá tính riêng.- Chất liệu cotton- Cổ chữ V- Tay dài, gấu tay có phối da- Không có lót


						</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemProduct col-md-3 col-sm-6 col-xs-6 ">
                                                <div class="pdLoopItem animated zoomIn">
                                                    <div class="itemLoop clearfix">
                                                        <div class="pdLoopImg elementFixHeight">

                                                            <div class="pdLabel sale">
                                                                <span>- 9%</span>
                                                            </div>


                                                            <a href="/products/ao-khoac-hien-dai-kta" title="Áo khoác hiện đại KTA">
                                                                <img alt="Áo khoác hiện đại KTA" data-reg="true" class="imgLoopItem" src="{{asset('./images/guest/product_detail/product_same_type_8.jpg')}}" style="width: auto;">
                                                            </a>
                                                            <div class="pdLoopAction hidden-sm hidden-xs">
                                                                <div class="listAction">
                                                                    <a href="javascript:void(0)" class="add-cart btnLoop Addcart" data-variantid="1019673629" title="Thêm vào giỏ"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Thêm vào giỏ</span></a>
                                                                    <a href="javascript:void(0)" class="btnLoop btnQickview btn-quickview-1" data-handle="{{route('product.quick_view')}}" data-toggle="tooltip" data-placement="left" title="Xem nhanh"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/ao-khoac-hien-dai-kta" title="Áo khoác hiện đại KTA">Ví da cao cấp 08</a></h3>
                                                            <p class="pdPrice">

                                                                <span>2,100,000₫</span>
                                                                <del class="pdComparePrice">2,300,000₫</del>

                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Zalora</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

							Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác mềm mại, ấm áp khi mặc. Với màu sắc tối, kiểu dáng đơn giản nhưng được khéo léo phối da ở viền cổ áo và tay áo khiến bạn trông thật dịu dàng nhưng vẫn có cá tính riêng.- Chất liệu cotton- Cổ chữ V- Tay dài, gấu tay có phối da- Không có lót


						</span>
                                                                    </li>
                                                                </ul>
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

                    <div class="col-md-3 hidden-sm hidden-xs" id="left_column">
                        <div class="box_sidebar">
                            {{--Left Module Link list--}}
                            @include('guest.common.__right_linklist_menu')
                            {{--Left Module Product--}}
                            @include('guest.common.__right_product_hot')
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php $amount = 100?>
        <script>
            var check_variant = true;
            var selectCallback = function(variant, selector) {
                var priceText = $('#pdPriceNumber'),
                    compareText = $('#pdComparePriceNumber'),
                    saleText = $('#pdCompareSalePrice'),
                    compareOffText = $('#pdCompareSaleOff');
                if (variant && variant.available) {
                    if(variant.featured_image != null){
                        var img = Haravan.resizeImage(variant.featured_image.src,'grande');
                        if(img.indexOf('http:') != -1 || img.indexOf('https:') != -1 ){
                            img = img.replace(/http:|https:/gi, "");
                        }
                        $(".imgThumb a[data-image='"+img+"']").click().parents('li').addClass('active');
                    }
                    if (variant.sku != null ){
                        jQuery('.listInfoDesc ul li.sku span').html(variant.sku);
                    }else{
                        jQuery('.listInfoDesc ul li.sku span').html('Null');
                    }
                    jQuery('.btn-addCart').removeClass('hidden');
                    jQuery('.btn-Soldout').addClass('hidden');
                    if(variant.price > 0 ){
                        priceText.html(Haravan.formatMoney(variant.price, "{{$amount}}₫"));
                        if(variant.price < variant.compare_at_price){
                            compareText.html(Haravan.formatMoney(variant.compare_at_price, "{{$amount}}₫"));
                            var pro_sold = variant.price ;
                            var pro_comp = variant.compare_at_price / 100;
                            var sale = 100 - (pro_sold / pro_comp) ;
                            var kq_sale = Math.round(sale);
                            var priceMinus = variant.compare_at_price - variant.price;
                            saleText.html(Haravan.formatMoney(priceMinus, "{{$amount}}₫"));
                            compareOffText.html('-'+ kq_sale + '%');
                            $('.comparePrice').removeClass('hidden');
                            $('.compareSaleOff').removeClass('hidden');
                        }else{
                            $('.comparePrice').addClass('hidden');
                            $('.compareSaleOff').addClass('hidden');
                        }
                    }else{
                        priceText.html('Liên hệ');
                        $('.comparePrice').addClass('hidden');
                        $('.compareSaleOff').addClass('hidden');
                    }
                    check_variant = true;
                } else {
                    jQuery('.btn-addCart').addClass('hidden');
                    jQuery('.btn-Soldout').removeClass('hidden');
                    check_variant = false;
                }
                return check_variant;
            };

            jQuery(document).ready(function($){

                new Haravan.OptionSelectors("product-select", { product: {"available":true,"compare_at_price_max":56500000.0,"compare_at_price_min":56500000.0,"compare_at_price_varies":false,"compare_at_price":56500000.0,"content":null,"description":"<p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\"><strong>Chi tiết</strong>:</p><p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\">- Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế,<span>&nbsp;</span><strong>áo sơ mi nam ASS17-MO57</strong><span>&nbsp;</span>giúp khẳng định vẻ ngoài nam tính và hiện đại của bạn. Kiểu dáng slimfit ôm sát vào cơ thể giúp tôn lên body người mặc.</p><p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\">- Kiểu dáng đơn giản với cổ bẻ kết hợp với tay ngắn gập khéo léo cùng đường nét tỉ mỉ, tinh tế mang đến cho bạn một diện mạo hoàn chỉnh mỗi khi xuất hiện.</p><p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\"><strong>Chất liệu</strong>:</p><p style=\"text-align: justify;\" data-mce-style=\"text-align: justify;\">-<span>&nbsp;</span><strong>Áo sơ mi ASS17-MO57</strong><span>&nbsp;</span>là sự kết hợp hài hòa giữa sợ Modal và sợi Poly spun mang đến cảm giác mát lạnh khi được chạm vào, khả năng thấm hút, chống nhăn tốt thoải mái, dễ chịu khi mặc. Đây là một trong những sản phẩm chiếm được cảm tình nhiều nhất của tín đồ Aristino trong mùa hè này.</p>","featured_image":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","handle":"ao-so-mi-dai-tay-aristino-als021","id":1009687436,"images":["https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","https:https://product.hstatic.net/1000244873/product/upload_04017362185944ef82975656c6d48ef0.jpg","https:https://product.hstatic.net/1000244873/product/upload_6ebd03d020f442779e85a8fe8951ca22.jpg"],"options":["Màu sắc","Kích thước"],"price":33900000.0,"price_max":33900000.0,"price_min":33900000.0,"price_varies":false,"tags":["miss","thoi-trang","thoi-trang-nam"],"template_suffix":null,"title":"Áo sơ mi dài tay Aristino ALS021","type":"Quần áo","url":"/products/ao-so-mi-dai-tay-aristino-als021","pagetitle":"Áo sơ mi dài tay Aristino ALS021","metadescription":"Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế, áo sơ mi nam ASS17-MO57 giúp khẳng định vẻ ngoài nam tính và hiện đại của bạn.","variants":[{"id":1019623662,"barcode":null,"available":true,"price":33900000.0,"sku":"STMF-04","option1":"Trắng","option2":"M","option3":"","options":["Trắng","M"],"inventory_quantity":5,"old_inventory_quantity":5,"title":"Trắng / M","weight":0.0,"compare_at_price":56500000.0,"inventory_management":"haravan","inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440248,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","variant_ids":[1019623662,1019623665,1019623666]}},{"id":1019623663,"barcode":null,"available":true,"price":33900000.0,"sku":null,"option1":"Đen","option2":"M","option3":"","options":["Đen","M"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Đen / M","weight":0.0,"compare_at_price":56500000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440249,"created_at":"0001-01-01T00:00:00","position":2,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_04017362185944ef82975656c6d48ef0.jpg","variant_ids":[1019623663]}},{"id":1019623664,"barcode":null,"available":true,"price":33900000.0,"sku":null,"option1":"Xanh","option2":"M","option3":"","options":["Xanh","M"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Xanh / M","weight":0.0,"compare_at_price":56500000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440250,"created_at":"0001-01-01T00:00:00","position":3,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_6ebd03d020f442779e85a8fe8951ca22.jpg","variant_ids":[1019623664]}},{"id":1019623665,"barcode":null,"available":true,"price":33900000.0,"sku":null,"option1":"Trắng","option2":"L","option3":"","options":["Trắng","L"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Trắng / L","weight":0.0,"compare_at_price":56500000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440248,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","variant_ids":[1019623662,1019623665,1019623666]}},{"id":1019623666,"barcode":null,"available":true,"price":33900000.0,"sku":null,"option1":"Trắng","option2":"XL","option3":"","options":["Trắng","XL"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Trắng / XL","weight":0.0,"compare_at_price":56500000.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":{"id":1063440248,"created_at":"0001-01-01T00:00:00","position":1,"product_id":1009687436,"updated_at":"0001-01-01T00:00:00","src":"https:https://product.hstatic.net/1000244873/product/upload_6ab7aa1a9ac9449fabff4a94f301b004.jpg","variant_ids":[1019623662,1019623665,1019623666]}}],"vendor":"Aristino","published_at":"2017-11-24T09:27:46.835Z","created_at":"2017-11-24T09:27:47.085Z","not_allow_promotion":false}, onVariantSelected: selectCallback });

                // Add label if only one product option and it isn't 'Title'.


                // Auto-select first available variant on page load.





                $('.single-option-selector:eq(0)').val("Trắng").trigger('change');

                $('.single-option-selector:eq(1)').val("M").trigger('change');












                $('.selector-wrapper select').each(function(){
                    $(this).wrap( '<span class="custom-dropdown custom-dropdown--white"></span>');
                    $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
                });


            });
        </script>
        <script>
            var swatch_size = parseInt($('.select-swatch').children().size());
            jQuery(document).on('click','.swatch input', function(e) {
                e.preventDefault()
                var $this = $(this);
                var _available = '';
                $this.parent().siblings().find('label').removeClass('sd');
                $this.next().addClass('sd');
                var name = $this.attr('name');
                var value = $this.val();
                $('select[data-option='+name+']').val(value).trigger('change');
                if(swatch_size == 2){
                    if(name.indexOf('1') != -1){
                        $('#variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
                        $('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                        $('#variant-swatch-1 .swatch-element label').removeClass('sd');
                        $('#variant-swatch-1 .swatch-element').removeClass('soldout');
                        $('.selector-wrapper .single-option-selector').eq(1).find('option').each(function(){
                            var _tam = $(this).val();
                            $(this).parent().val(_tam).trigger('change');
                            if(check_variant){
                                if(_available == '' ){
                                    _available = _tam;
                                }
                            }else{
                                $('#variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
                                $('#variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
                            }
                        })
                        $('.selector-wrapper .single-option-selector').eq(1).val(_available).trigger('change');
                        $('#variant-swatch-1 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
                    }
                }else if (swatch_size == 3){
                    var _count_op2 = $('#variant-swatch-1 .swatch-element').size();
                    var _count_op3 = $('#variant-swatch-2 .swatch-element').size();
                    if(name.indexOf('1') != -1){
                        $('#variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
                        $('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                        $('#variant-swatch-1 .swatch-element label').removeClass('sd');
                        $('#variant-swatch-1 .swatch-element').removeClass('soldout');
                        $('#variant-swatch-2 .swatch-element label').removeClass('sd');
                        $('#variant-swatch-2 .swatch-element').removeClass('soldout');
                        var _avi_op1 = '';
                        var _avi_op2 = '';
                        $('#variant-swatch-1 .swatch-element').each(function(ind,value){
                            var _key = $(this).data('value');
                            var _unavi = 0;
                            $('.single-option-selector').eq(1).val(_key).change();
                            $('#variant-swatch-2 .swatch-element label').removeClass('sd');
                            $('#variant-swatch-2 .swatch-element').removeClass('soldout');
                            $('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                            $('#variant-swatch-2 .swatch-element').each(function(i,v){
                                var _val = $(this).data('value');
                                $('.single-option-selector').eq(2).val(_val).change();
                                if(check_variant == true){
                                    if(_avi_op1 == ''){
                                        _avi_op1 = _key;
                                    }
                                    if(_avi_op2 == ''){
                                        _avi_op2 = _val;
                                    }
                                    //console.log(_avi_op1 + ' -- ' + _avi_op2)
                                }else{
                                    _unavi += 1;
                                }
                            })
                            if(_unavi == _count_op3){
                                $('#variant-swatch-1 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                                setTimeout(function(){
                                    $('#variant-swatch-1 .swatch-element[data-value = "'+_key+'"] input').attr('disabled','disabled');
                                })
                            }
                        })
                        $('#variant-swatch-1 .swatch-element[data-value="'+_avi_op1+'"] input').click();
                    }
                    else if(name.indexOf('2') != -1){
                        $('#variant-swatch-2 .swatch-element label').removeClass('sd');
                        $('#variant-swatch-2 .swatch-element').removeClass('soldout');
                        $('.selector-wrapper .single-option-selector').eq(2).find('option').each(function(){
                            var _tam = $(this).val();
                            $(this).parent().val(_tam).trigger('change');
                            if(check_variant){
                                if(_available == '' ){
                                    _available = _tam;
                                }
                            }else{
                                $('#variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
                                $('#variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
                            }
                        })
                        $('.selector-wrapper .single-option-selector').eq(2).val(_available).trigger('change');
                        $('#variant-swatch-2 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
                    }
                }else{

                }
            })
            $(document).ready(function(){
                var _chage = '';
                $('.swatch-element[data-value="'+$('.selector-wrapper .single-option-selector').eq(0).val()+'"]').find('input').click();
                $('.swatch-element[data-value="'+$('.selector-wrapper .single-option-selector').eq(1).val()+'"]').find('input').click();
                if(swatch_size == 1){
                    var _avi_op1 = '';
                    $('#variant-swatch-0 .swatch-element').each(function(ind,value){
                        var _key = $(this).data('value');
                        $('.single-option-selector').eq(0).val(_key).change();
                        if(check_variant == true){
                            if(_avi_op1 == ''){
                                _avi_op1 = _key;
                            }
                        }else{
                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');
                        }
                    })
                    $('#variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
                }else	if(swatch_size == 2){
                    var _avi_op1 = '';
                    var _avi_op2 = '';
                    var _count = $('#variant-swatch-1 .swatch-element').size();
                    $('#variant-swatch-0 .swatch-element').each(function(ind,value){
                        var _key = $(this).data('value');
                        var _unavi = 0;
                        $('.single-option-selector').eq(0).val(_key).change();
                        $('#variant-swatch-1 .swatch-element').each(function(i,v){
                            var _val = $(this).data('value');
                            $('.single-option-selector').eq(1).val(_val).change();
                            if(check_variant == true){
                                if(_avi_op1 == ''){
                                    _avi_op1 = _key;
                                }
                                if(_avi_op2 == ''){
                                    _avi_op2 = _val;
                                }
                            }else{
                                _unavi += 1;
                            }
                        })
                        if(_unavi == _count){
                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');
                        }
                    })
                    $('#variant-swatch-1 .swatch-element[data-value = "'+_avi_op2+'"] input').click();
                    $('#variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
                }else if(swatch_size == 3){
                    var _avi_op1 = '';
                    var _avi_op2 = '';
                    var _avi_op3 = '';
                    var _size_op2 = $('#variant-swatch-1 .swatch-element').size();
                    var _size_op3 = $('#variant-swatch-2 .swatch-element').size();

                    $('#variant-swatch-0 .swatch-element').each(function(ind,value){
                        var _key_va1 = $(this).data('value');
                        var _count_unavi = 0;
                        $('.single-option-selector').eq(0).val(_key_va1).change();
                        $('#variant-swatch-1 .swatch-element').each(function(i,v){
                            var _key_va2 = $(this).data('value');
                            var _unavi_2 = 0;
                            $('.single-option-selector').eq(1).val(_key_va2).change();
                            $('#variant-swatch-2 .swatch-element').each(function(j,z){
                                var _key_va3 = $(this).data('value');
                                $('.single-option-selector').eq(2).val(_key_va3).change();
                                if(check_variant == true){
                                    if(_avi_op1 == ''){
                                        _avi_op1 = _key_va1;
                                    }
                                    if(_avi_op2 == ''){
                                        _avi_op2 = _key_va2;
                                    }
                                    if(_avi_op3 == ''){
                                        _avi_op3 = _key_va3;
                                    }
                                }else{
                                    _unavi_2 += 1;
                                }
                            })
                            if(_unavi_2 == _size_op3){
                                _count_unavi += 1;
                            }
                        })
                        if(_size_op2 == _count_unavi){
                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').addClass('soldout');
                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').find('input').attr('disabled','disabled');
                        }
                    })
                    $('#variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
                }
            })
        </script>
    </section>
@endsection
