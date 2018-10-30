<!-- code nút gọi dán vào web. Thường là footer -->
<div class="fix_tel">
    <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 150px; bottom: -12px;">
        <div class="ring-alo-ph-circle"></div>
        <div class="ring-alo-ph-circle-fill"></div>
        <div class="ring-alo-ph-img-circle">
            <a href="tel:{{$appInfo->app_phone}}">
                <img class="lazy" src="{{asset('/images/guest/call.png')}}" alt="G">
            </a>
        </div>
    </div>
    <div class="tel">
        <a href="tel:{{$appInfo->app_phone}}">
            <small>Hotline tư vấn (24/7)</small>
            <p class="fone">
                {{$appInfo->app_phone}}
            </p></a>
    </div>
</div>

<!-- code nút gọi dán vào web. Thường là footer -->
