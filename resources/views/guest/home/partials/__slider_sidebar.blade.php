<?php use App\Common\Constant; ?>

<div class="banner-slider">
    <div class="blogsList">
        <ul class="bannerSlider owlDesign notDots notStyle">
            @if(isset($banners))
                @foreach($banners as $banner)
                    <li class="articleItem">
                        <a href="/collections/thoi-trang-nu">
                            <img src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$banner->src_image)}}" alt="slider"></a>
                    </li>
                @endforeach
            @endif
        </ul>

    </div>
</div>