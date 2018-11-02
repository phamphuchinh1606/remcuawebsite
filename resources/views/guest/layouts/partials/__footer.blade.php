<footer id="stFooter">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 leftInfo">
                <div class="s-div-fot-ct">
                    <div class="s-fot-title">Thông tin liên hệ</div>
                    <div class="content">
                        <div class="ftLogo">
                            <div class="fi-title1 insScroll">
                                <a href="{{route('home')}}" title="{{$appInfo->app_src_icon}}">
                                    <img class="insImageload"
                                        data-load="true"
                                        src="{{asset($appInfo->app_src_icon)}}"
                                        alt="{{$appInfo->app_name}}"
                                        itemprop="logo">
                                </a>
                            </div>
                        </div>

                        <div class="ftShopInfo clearfix">
                            ĐC: {{$appInfo->app_address}} <br>
                            ĐT: {{$appInfo->app_phone}} <br>
                            Fax: {{$appInfo->app_fax}} <br>
                            Facebook: {{$appInfo->app_facebook}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 rightMenu">
                <div class="row">

                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
                        <div class="s-div-fot-ct">
                            <div class="s-fot-title">Về chúng tôi</div>
                            <ul class="s-mn-fot notStyle">


                                <li><a href="{{route('home')}}">Trang chủ</a></li>


                                <li><a href="/collections/all">Sản phẩm</a></li>


                                <li><a href="{{route('blog')}}">Tin tức</a></li>


                                <li><a href="{{route('about')}}">Giới thiệu</a></li>


                                <li><a href="{{route('contact')}}">Liên hệ</a></li>


                            </ul>

                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="s-div-fot-ct">
                            <div class="s-fot-title">Hỗ trợ</div>
                            <ul class="s-mn-fot notStyle">


                                <li><a href="{{route('home')}}">Trang chủ</a></li>


                                <li><a href="/collections/all">Sản phẩm</a></li>


                                <li><a href="{{route('blog')}}">Tin tức</a></li>


                                <li><a href="{{route('about')}}">Giới thiệu</a></li>


                                <li><a href="{{route('contact')}}">Liên hệ</a></li>


                            </ul>

                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-4 col-md-5 col-lg-4">
                        <div class="s-div-fot-ct">
                            <div class="s-fot-title">Kết nối với chúng tôi</div>
                            <div class="s-fot-lkw">
                                <a href="{{$appInfo->app_link_facebook_fanpage}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#2"><i class="fa fa-twitter"></i></a>
                                <a href="#3"><i class="fa fa-youtube"></i></a>
                                <a href="#4"><i class="fa fa-instagram"></i></a>
                                <a href="#5"><i class="fa fa-pinterest"></i></a>
                            </div>
                            {{--<div class="s-fot-title">Đăng kí nhận bản tin</div>--}}
                            {{--<form accept-charset='UTF-8' action='/account/contact' class='contact-form'--}}
                                  {{--method='post'>--}}
                                {{--<input name='form_type' type='hidden' value='customer'>--}}
                                {{--<input name='utf8' type='hidden' value='✓'>--}}

                                {{--<div class="input-group s-form">--}}
                                    {{--<input type="email" class="form-control" name="contact[email]"--}}
                                           {{--placeholder="Email của bạn" value="" required="">--}}
                                    {{--<div class="input-group-btn">--}}
                                        {{--<button type="submit" class="btn">Gửi</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</form>--}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="overmenuhover"></div>
</footer>
