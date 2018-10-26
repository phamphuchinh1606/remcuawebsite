<nav id="headerMenu">
    <div class="container">
        <div id="headerNav" class="">
            <nav id="navWrap" class="nav navSiteMain">
                <div class="loginMB visible-xs visible-sm">
                    <div class="wrapLogin clearfix">
                        <div class="icon">
                            <img src="https://theme.hstatic.net/1000204910/1000273076/14/icon_avatar.png?v=395"
                                 alt=" ">
                        </div>
                        <div class="user">

                            <a class="log-only" href="/account/login" title="Đăng nhập">Đăng nhập</a>
                            <h3>
                                Thông tin tài khoản
                            </h3>

                        </div>
                    </div>
                </div>
                <ul class="nav-navbar notStyle clearfix">


                    <li class="{{ (Request::is('/') ? 'active' : '') }}">
                        <a href="/" class="" title="Trang chủ">
                            <span>Trang chủ</span>
                        </a>
                    </li>


                    <li class="liChild {{ (Request::is('*collection*') ? 'active' : '') }}">
                        <a href="{{route('collection_all')}}" title="Sản phẩm" class="">
                            <span>Sản phẩm</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="mainChild levlup_2" role="menu">
                            @if(isset($productTypes))
                                @foreach($productTypes as $productType)
                                    <li class=" liChild active">
                                        <?php $isChilds =  isset($productType->childs) && count($productType->childs) > 0 ; ?>
                                        <a href="{{route('collection',['slug' => isset($productType->slug) ? $productType->slug : '1' , 'id' => $productType->id])}}" class=""
                                           title="{{$productType->product_type_name}}">
                                            <span>{{$productType->product_type_name}}</span>
                                            @if($isChilds)
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            @endif
                                        </a>
                                        @if($isChilds)
                                            <ul class="mainChild levlup_3">
                                                @foreach($productType->childs as $child)
                                                    <li class="active">
                                                        <a href="{{route('collection',['slug' => isset($child->slug) ? $child->slug : '1' , 'id' => $child->id])}}" title="{{$child->product_type_name}}"><span>{{$child->product_type_name}}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    <li class="{{ (Request::is('*blog*') ? 'active' : '') }}">
                        <a href="{{route('blog')}}" class="" title="Tin tức">
                            <span>Tin tức</span>
                        </a>
                    </li>


                    <li class="{{ (Request::is('*about*') ? 'active' : '') }}">
                        <a href="{{route('about')}}" class="" title="Giới thiệu">
                            <span>Giới thiệu</span>
                        </a>
                    </li>


                    <li class="{{ (Request::is('*contact*') ? 'active' : '') }}">
                        <a href="{{route('contact')}}" class="" title="Liên hệ">
                            <span>Liên hệ</span>
                        </a>
                    </li>


                </ul>

                <div class="visible-xs visible-sm closeMenuMB text-center">
                    <a href="javascript:void(0)" class="closeNav viewAll">Đóng</a>
                </div>
            </nav>
        </div>
    </div>
</nav>
