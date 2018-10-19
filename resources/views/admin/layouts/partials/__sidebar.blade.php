<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="main.html">
                    <i class="nav-icon icon-speedometer"></i> Trang chủ
                    <span class="badge badge-info">NEW</span>
                </a>
            </li>
            <li class="nav-title">Sản phẩm</li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.product.index')}}">
                    <i class="nav-icon icon-drop"></i>
                    Sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.product_type.index')}}">
                    <i class="nav-icon icon-pencil"></i>
                    Danh mục sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.vendor.index')}}">
                    <i class="nav-icon icon-pencil"></i>
                    Thương hiệu
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon fa fa-code"></i>Cài Đặt</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.setting.banner')}}">
                            <i class="nav-icon icon-note"></i>
                            Banner Slider
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.setting.topBanner')}}">
                            <i class="nav-icon icon-note"></i>
                            Top Banner
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.setting.tag')}}">
                            <i class="nav-icon icon-note"></i>
                            Tags Key
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.setting.app')}}">
                            <i class="nav-icon icon-note"></i>
                            App Info
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.blog.index')}}">
                    <i class="nav-icon icon-pencil"></i>
                    Tin Tức
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.contact.index')}}">
                    <i class="nav-icon icon-bell"></i>
                    Liên Hệ
                    <span class="badge badge-danger">{{$countContact}}</span>
                </a>
            </li>
        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 708px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 422px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
