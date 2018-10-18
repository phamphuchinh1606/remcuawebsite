<?php use App\Common\Constant; ?>
<div class="main-sidebar">
    <div class="title-sidebar">
        <a href="">
            <div class="icon"><span></span></div>
            <h2>
                Danh mục sản phẩm
            </h2>
        </a>
    </div>
    <ul class="list-group">
        @foreach($productTypes as $productType)
            <?php $isChilds =  isset($productType->childs) && count($productType->childs) > 0 ; ?>
            <li class="root_parent actived @if($isChilds) nomega has_megamenu @endif ">
                <a href="{{route('collection')}}">
                    <img src="{{\App\Common\Constant::$PATH_URL_UPLOAD_IMAGE.$productType->image_icon}}"/>
                    {{$productType->product_type_name}}
                    @if($isChilds)
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    @endif
                </a>

                @if($isChilds)
                    <ul class="mainChild levlup_2" role="menu">
                        @foreach($productType->childs as $child)
                            <li class="dropdownmenu2">
                                <a href="{{route('collection')}}" title="{{$child->product_type_name}}">
                                    <span>{{$child->product_type_name}}</span>
                                    {{--<i class="fa fa-angle-right" aria-hidden="true"></i>--}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach

        {{--<li class="root_parent  has_megamenu actived"><a href="{{route('collection')}}">--}}
                {{--<img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon1.png?v=1543">--}}
                {{--Ví khắc cung hoàn đạo <i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}

            {{--<ul class="megamenu_list2"--}}
                {{--style="background: url(https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_bgmegamenu1.png?v=1543) right bottom no-repeat #fff;">--}}
                {{--<div class="row">--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Thực phẩm cho bé</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Bé ăn dặm</a></li>--}}

                            {{--<li><a href="/" class="">Bánh ăn dặm</a></li>--}}

                            {{--<li><a href="/" class="">Cháo dinh dưỡng</a></li>--}}

                            {{--<li><a href="/" class="">Sữa</a></li>--}}

                            {{--<li><a href="/" class="">Yến sào</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Bé ăn</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Bình uống nước</a></li>--}}

                            {{--<li><a href="/" class="">Núm ti ngậm</a></li>--}}

                            {{--<li><a href="/" class="">Vệ sinh tay</a></li>--}}

                            {{--<li><a href="/" class="">Máy hâm sữa</a></li>--}}

                            {{--<li><a href="/" class="">Bình tiệt trùng</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Bé vệ Sinh</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Khăn tắm cho bé</a></li>--}}

                            {{--<li><a href="/" class="">Xà phòng rửa tay</a></li>--}}

                            {{--<li><a href="/" class="">Khăn ướt, giấy</a></li>--}}

                            {{--<li><a href="/" class="">Tã</a></li>--}}

                            {{--<li><a href="/" class="">Phụ kiện giặt rửa</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Bé ngủ</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Gối ngủ</a></li>--}}

                            {{--<li><a href="/" class="">Nôi</a></li>--}}

                            {{--<li><a href="/" class="">Cũi</a></li>--}}

                            {{--<li><a href="/" class="">Giường</a></li>--}}

                            {{--<li><a href="/" class="">Võng</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Bé mặc</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Nón cho bé</a></li>--}}

                            {{--<li><a href="/" class="">Vớ cho bé</a></li>--}}

                            {{--<li><a href="/" class="">Áo chơi ngoài trời</a></li>--}}

                            {{--<li><a href="/" class="">Cũi, võng</a></li>--}}

                            {{--<li><a href="/" class="">Chăn, giường</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
            {{--</ul>--}}

        {{--</li>--}}


        {{--<li class="root_parent actived"><a href="{{route('collection')}}"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon2.png?v=1543">--}}
                {{--Ví phong cảnh</a></li>--}}


        {{--<li class="root_parent actived"><a href="{{route('collection')}}"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon3.png?v=1543">--}}
                {{--Túi ví</a></li>--}}


        {{--<li class="root_parent  has_megamenu actived"><a href="/"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon4.png?v=1543">--}}
                {{--Ví thời trang nữ <i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}

            {{--<ul class="megamenu_list2"--}}
                {{--style="background: url(https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_bgmegamenu4.png?v=1543) right bottom no-repeat #fff;">--}}
                {{--<div class="row">--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Trang phục</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Quần jean</a></li>--}}

                            {{--<li><a href="/" class="">Đầm nữ</a></li>--}}

                            {{--<li><a href="/" class="">Áo nữ</a></li>--}}

                            {{--<li><a href="/" class="">Chân váy</a></li>--}}

                            {{--<li><a href="/" class="">Áo khoác nữ</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Đồ ngủ</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Áo ngực</a></li>--}}

                            {{--<li><a href="/" class="">Quần lót nữ</a></li>--}}

                            {{--<li><a href="/" class="">Tất</a></li>--}}

                            {{--<li><a href="/" class="">Áo ngủ</a></li>--}}

                            {{--<li><a href="/" class="">Đồ lot định hình</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Giày dép</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Xăng đan</a></li>--}}

                            {{--<li><a href="/" class="">Dép nữ</a></li>--}}

                            {{--<li><a href="/" class="">Giày cao gót</a></li>--}}

                            {{--<li><a href="/" class="">Guốc</a></li>--}}

                            {{--<li><a href="/" class="">Giày bốt nữ</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Phụ kiện</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Nón</a></li>--}}

                            {{--<li><a href="/" class="">Thắt lưng</a></li>--}}

                            {{--<li><a href="/" class="">Dây nịt</a></li>--}}

                            {{--<li><a href="/" class="">Nơ</a></li>--}}

                            {{--<li><a href="/" class="">Búi tóc</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="/" class="menu_parent">Túi thời trang</a>--}}

                        {{--<ul class="menu-child">--}}

                            {{--<li><a href="/" class="">Túi đeo chéo</a></li>--}}

                            {{--<li><a href="/" class="">Tú đeo vai</a></li>--}}

                            {{--<li><a href="/" class="">Ví nữ</a></li>--}}

                            {{--<li><a href="/" class="">Ví đi tiệc</a></li>--}}

                            {{--<li><a href="/" class="">Balo nữ</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}

                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
            {{--</ul>--}}

        {{--</li>--}}


        {{--<li class="root_parent nomega has_megamenu actived"><a href="/"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon5.png?v=1543">--}}
                {{--Ví thời trang nam<i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}

            {{--<ul class="mainChild levlup_2" role="menu">--}}

                {{--<li class="dropdownmenu2">--}}
                    {{--<a href="/" title="Thời trang nam"><span>Thời trang nam</span> <i--}}
                                {{--class="fa fa-angle-right" aria-hidden="true"></i></a>--}}

                    {{--<ul class="mainChild levlup_3" role="menu">--}}

                        {{--<li class="">--}}
                            {{--<a href="/"--}}
                               {{--title="Thời trang nam Dạo phố"><span>Thời trang nam Dạo phố</span></a>--}}
                        {{--</li>--}}

                        {{--<li class="">--}}
                            {{--<a href="/" title="Áo thun nam"><span>Áo thun nam</span></a>--}}
                        {{--</li>--}}

                        {{--<li class="">--}}
                            {{--<a href="/" title="Áo ba lỗ"><span>Áo ba lỗ</span></a>--}}
                        {{--</li>--}}

                        {{--<li class="">--}}
                            {{--<a href="/" title="Ao thể thao"><span>Ao thể thao</span></a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}

                {{--</li>--}}

                {{--<li class="dropdownmenu2">--}}
                    {{--<a href="/" title="Áo vest nam"><span>Áo vest nam</span> <i--}}
                                {{--class="fa fa-angle-right" aria-hidden="true"></i></a>--}}

                    {{--<ul class="mainChild levlup_3" role="menu">--}}

                        {{--<li class="">--}}
                            {{--<a href="/" title="Áo vest đen"><span>Áo vest đen</span></a>--}}
                        {{--</li>--}}

                        {{--<li class="">--}}
                            {{--<a href="/" title="Quần vest đen"><span>Quần vest đen</span></a>--}}
                        {{--</li>--}}

                        {{--<li class="">--}}
                            {{--<a href="/" title="Áo dự tiệc"><span>Áo dự tiệc</span></a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}

                {{--</li>--}}

                {{--<li class="dropdownmenu2">--}}
                    {{--<a href="/" title="Quần kaki 2 màu"><span>Quần kaki 2 màu</span></a>--}}

                {{--</li>--}}

                {{--<li class="dropdownmenu2">--}}
                    {{--<a href="/" title="Quần đùi dạo phố"><span>Quần đùi dạo phố</span></a>--}}

                {{--</li>--}}

            {{--</ul>--}}

        {{--</li>--}}


        {{--<li class="root_parent actived"><a href="{{route('collection')}}"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon6.png?v=1543">--}}
                {{--Ví tình ca</a></li>--}}


        {{--<li class="root_parent actived"><a href="{{route('collection')}}"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon7.png?v=1543">--}}
                {{--Ví năm mới</a></li>--}}


        {{--<li class="root_parent actived"><a href="{{route('collection')}}"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon8.png?v=1543">--}}
                {{--Ví giảm giá</a></li>--}}


        {{--<li class="root_parent actived"><a href="{{route('collection')}}"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon9.png?v=1543">--}}
                {{--Sản phẩm hót</a></li>--}}


        {{--<li class="root_parent actived"><a href="{{route('collection')}}"><img--}}
                        {{--src="https://theme.hstatic.net/1000244873/1000313408/14/sidebarleft_icon10.png?v=1543">--}}
                {{--Ví cầu an</a></li>--}}


    </ul>
</div>