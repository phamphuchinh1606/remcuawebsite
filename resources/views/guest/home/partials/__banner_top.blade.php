<?php use App\Common\Constant; ?>
<section id="banner-home-top" class="">
    <div class="container">
        <div class="block-group-banner">
            @if(isset($topBanners))
                @foreach($topBanners as $banner)
                    <div class="col-xs-12 col-sm-4 padding-0 item banner-boder-zoom2 first">
                        <a href="#" class="">
                            <img src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$banner->src_image)}}"
                                 alt="alt"/>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>