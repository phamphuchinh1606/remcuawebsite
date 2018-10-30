<div id="headerPage">
    <div class="container">
        <div class="insHeaderWrap">
            <div class="row">
                <div id="headerLogo" class="col-md-3 col-sm-12 col-xs-12">
                    <div class="visible-xs visible-sm mbToggle translateY-50">
                        <a href="javascript:void(0)" class="btnMBToggleNav"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAQlBMVEUAAABAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEDQTCTWAAAAFnRSTlMA/sJgJXkkeK1jGg/bup9uMeVbWk85sxcycAAAAFxJREFUOMvt1DkSgCAQBdHPpmwCbve/qhFllSA1Gs+LO25EcVs93u1mrkwOYD8dTrVcQWMRPRaNoKeW9mDfWEmSkGihBRvyegyVFGO5hqcaK2AUznRtxEmJGB7dBU9GBJAADKKNAAAAAElFTkSuQmCC"
                                    alt="Beauty style">
                        </a>
                    </div>

                    <p>
                        <a href="/">
                            <img src="{{asset($appInfo->app_src_icon)}}"
                                    alt="{{$appInfo->app_name}}"/>
                        </a>
                    </p>

                    <h1 class="hide">
                        {{$appInfo->app_name}}
                    </h1>

                    <div class="visible-xs visible-sm mbCart translateY-50">
                        <a href="/cart">
                            <div class="icon">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                            <span id="cartCountMB" class="numberCart cartItemCount " data-count="1">1</span>
                        </a>
                    </div>
                </div>
                <div id="headerSearch" class="col-md-6 col-sm-12 col-xs-12">
                    <div class="frmSearch">
                        <form id="searchFRM" action="{{route('search')}}" method="GET">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input required="" autocomplete="off" type="text" name="product_name" id="inputSearchAuto"
                                   placeholder="Tìm kiếm...">
                            <button type="submit" class="insButtonk btnSearch">
                                Tìm kiếm
                            </button>
                        </form>
                        <div id="ajaxSearchResults" class="ajaxSearchAuto" style="display: none">
                            <div class="resultsContent">

                            </div>
                        </div>
                    </div>

                    <ul class="searchEx notStyle">
                        <li class="title"><strong>Gợi ý từ khóa:</strong></li>
                        <li><span>Rèm màng cửa phương anh, rèm cửa ...</span></li>
                    </ul>

                </div>

                <div id="headerUser" class="col-md-3 hidden-sm hidden-xs">
                    <div class="wrap cleafix">
                        <div class="row">
                            <div class="userBox colItem">
                                <div class="col-md-4">
                                </div>
                            </div>

                            <div class="userBox colItem">
                                <div class="col-md-4">
                                    <a href="{{route('contact')}}">
                                        <div class="box">
                                            <div class="icon">
                                                <i class="fa fa-globe" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <span>Liên hệ</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            {{--<div class="col-md-4 colItem">--}}
                                {{--<div class="userBox">--}}
                                    {{--<a href="/account">--}}
                                        {{--<div class="box">--}}
                                            {{--<div class="icon">--}}
                                                {{--<i class="fa fa-user-circle-o" aria-hidden="true"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="text">--}}

                                                {{--<span>Tài khoản</span>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="col-md-4 colItem">
                                <div class="userBox">
                                    <a href="{{route('cart')}}">
                                        <div class="box">
                                            <div class="icon">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                <span class="cartItemCount " data-count="{{Cart::getTotalQuantity()}}" id="labelCartCount">
                                                    {{Cart::getTotalQuantity()}}
                                                </span>
                                            </div>
                                            <div class="text">
                                                <span>Giỏ hàng</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="overlayMenu"></div>
            </div>
        </div>
    </div>
</div>
