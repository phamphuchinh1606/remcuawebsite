<div class="insBreadcrumb " >
    <div class="container">
        <div class="breadcrumb-wrap">
            <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
                <li><a href="/" target="_self">Trang chủ</a></li>
                <!--li><a href="/collections" target="_self">Danh mục</a></li-->
                @if(isset($blog))
                    <li class="active"><span>Blog - Tin tức</span></li>
                @elseif(isset($blogDetail))
                    <li><a href="/collections/so-mi-nam" target="_self">Sơ Mi Nam</a></li>
                    <li class="active"><span> Áo sơ mi dài tay Aristino ALS021</span></li>
                @elseif(isset($contact))
                    <li class="active"><span>Liên hệ</span></li>
                @else
                    <li><a href="{{route('blog')}}" target="_self">Tin tức</a></li>
                    <li class="active"><span> Chọn đồ mùa hè che khuyết điểm cánh tay</span></li>
                @endif
            </ol>
        </div>
    </div>
</div>
