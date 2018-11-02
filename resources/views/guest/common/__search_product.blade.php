<script>
    let searchInfo = {
        'product_type' : '{{$searchInfo->product_type}}',
        'product_price' : '{{$searchInfo->product_price}}'
    };
    function getSearchInfo(){
        searchInfo.product_type = '';
        $('input[name=product_type]').each(function(){
            if($(this).prop("checked")){
                searchInfo.product_type += (searchInfo.product_type == '' ? '' : '-') + $(this).val();
            }
        });
        searchInfo.product_price = '';
        $('input[name=search_price]').each(function(){
            if($(this).prop("checked")){
                searchInfo.product_price += (searchInfo.product_price == '' ? '' : '-') + $(this).val();
            }
        });
    }
    $(document).ready(function(){
       if(searchInfo.product_type != null && searchInfo.product_type != undefined){
           let listProductTypeId = searchInfo.product_type.split('-');
           for(productTypeId of listProductTypeId)
           {
               $('#product_type_'+ productTypeId).prop( "checked", true );
           }
       }
        if(searchInfo.product_price != null && searchInfo.product_price != undefined){
            let listPrice = searchInfo.product_price.split('-');
            for(price of listPrice)
            {
                $('#product_price_'+ price).prop( "checked", true );
            }
        }

       $('.search_info').on('click',function(){
           getSearchInfo();
           $('#btn-apply').removeClass('hide');
       });
        $('#btn-apply').on('click',function(){
            window.location = "{{route('collection_all')}}" + "?product_type="+searchInfo.product_type+"&product_price="+searchInfo.product_price;
        });
    });


</script>

<div class="block left-module">
    <p class="title_block">
        Bộ lọc
        <button type="button" class="btn btn-primary pull-right hide" id="btn-apply">Áp dụng</button>
    </p>

    <div class="block_content filter_xs">
        <!-- layered -->
        <div class="layered layered-filter-price">
            <!-- ./filter brand -->

            <div class="layered_subtitle">Loại Sản Phẩm</div>
            <div class="layered-content filter-brand">
                <ul class="check-box-list">
                    @foreach($productTypes as $productType)
                        <li>
                            <input class="search_info" type="checkbox" id="product_type_{{$productType->id}}" name="product_type" value="{{$productType->id}}">
                            <label for="product_type_{{$productType->id}}">
                                <span class="button"></span>
                                {{$productType->product_type_name}}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{--<div class="layered_subtitle">Chất Liệu</div>--}}
            {{--<div class="layered-content filter-brand">--}}
                {{--<ul class="check-box-list">--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="brand1" name="cc" data-vendor="(vendor:product**Aristino)">--}}
                        {{--<label for="brand1">--}}
                            {{--<span class="button"></span>--}}
                            {{--Da Bò Vân--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="brand2" name="cc" data-vendor="(vendor:product**Juno)">--}}
                        {{--<label for="brand2">--}}
                            {{--<span class="button"></span>--}}
                            {{--Da Bò Sáp--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="brand3" name="cc" data-vendor="(vendor:product**Gucci)">--}}
                        {{--<label for="brand3">--}}
                            {{--<span class="button"></span>--}}
                            {{--Da Bò Trơn--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="brand4" name="cc" data-vendor="(vendor:product**Zalora)">--}}
                        {{--<label for="brand4">--}}
                            {{--<span class="button"></span>--}}
                            {{--Da Cá Sấu--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="brand5" name="cc" data-vendor="(vendor:product**Zara)">--}}
                        {{--<label for="brand5">--}}
                            {{--<span class="button"></span>--}}
                            {{--Da Cừu--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="brand6" name="cc" data-vendor="(vendor:product**H&amp;M)">--}}
                        {{--<label for="brand6">--}}
                            {{--<span class="button"></span>--}}
                            {{--Da Dê--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="brand7" name="cc" data-vendor="(vendor:product**Prada)">--}}
                        {{--<label for="brand7">--}}
                            {{--<span class="button"></span>--}}
                            {{--Một Số Loại Khác--}}
                        {{--</label>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</div>--}}

            <!-- ./filter brand -->
            <!-- filter price -->

            <div class="layered_subtitle">Giá</div>
            <div class="layered-content slider-range filter-price">
                <ul class="check-box-list">
                    <li>
                        <input type="checkbox" id="product_price_less_100000" class="search_info" name="search_price" value="less_100000">
                        <label for="product_price_less_100000">
                            <span class="button"></span>
                            Dưới 100,000₫
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="product_price_100000_300000" class="search_info" name="search_price" value="100000_300000">
                        <label for="product_price_100000_300000">
                            <span class="button"></span>
                            100,000₫ - 300,000₫
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="product_price_300000_500000" class="search_info" name="search_price" value="300000_500000">
                        <label for="product_price_300000_500000">
                            <span class="button"></span>
                            300,000₫ - 500,000₫
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="product_price_500000_1000000" class="search_info" name="search_price" value="500000_1000000">
                        <label for="product_price_500000_1000000">
                            <span class="button"></span>
                            500,000₫ - 1,000,000₫
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" id="product_price_bigger_1000000" class="search_info" name="search_price" value="bigger_1000000">
                        <label for="product_price_bigger_1000000">
                            <span class="button"></span>
                            Trên 1,000,000₫
                        </label>
                    </li>
                </ul>
            </div>
            <!-- ./filter price -->
            <!-- filter color -->

            {{--<div class="layered_subtitle">Màu sắc</div>--}}
            {{--<div class="layered-content filter-color">--}}
                {{--<ul class="check-box-list">--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color1" name="cc" data-color="(variant:product**Đỏ)">--}}
                        {{--<label style="background-color: #ff0000" for="color1"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color2" name="cc" data-color="(variant:product**Vàng)">--}}
                        {{--<label style="background-color: #ffff05" for="color2"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color3" name="cc" data-color="(variant:product**Cam)">--}}
                        {{--<label style="background-color: #f5b505" for="color3"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color4" name="cc" data-color="(variant:product**Xanh dương)">--}}
                        {{--<label style="background-color: #5100ff" for="color4"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color5" name="cc" data-color="(variant:product**Xanh lá)">--}}
                        {{--<label style="background-color: #3cfa08" for="color5"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color6" name="cc" data-color="(variant:product**Nâu)">--}}
                        {{--<label style="background-color: #753a3a" for="color6"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color7" name="cc" data-color="(variant:product**Xám)">--}}
                        {{--<label style="background-color: #cccaca" for="color7"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color8" name="cc" data-color="(variant:product**Tím)">--}}
                        {{--<label style="background-color: #b5129a" for="color8"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color9" name="cc" data-color="(variant:product**Hồng)">--}}
                        {{--<label style="background-color: #db999b" for="color9"><span class="button"></span></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="checkbox" id="color10" name="cc" data-color="(variant:product**Đen)">--}}
                        {{--<label style="background-color: #000000" for="color10"><span class="button"></span></label>--}}
                    {{--</li>--}}


                {{--</ul>--}}
            {{--</div>--}}

            <!-- ./filter color -->
            <!-- ./filter size -->

            {{--<div class="layered_subtitle">Kích thước</div>--}}
            {{--<div class="layered-content filter-size">--}}

                {{--<ul class="check-box-list">--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="size1" name="cc" data-size="(variant:product**35)">--}}
                        {{--<label for="size1">--}}
                            {{--<span class="button"></span>35--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="size2" name="cc" data-size="(variant:product**36)">--}}
                        {{--<label for="size2">--}}
                            {{--<span class="button"></span>36--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="size3" name="cc" data-size="(variant:product**37)">--}}
                        {{--<label for="size3">--}}
                            {{--<span class="button"></span>37--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="size4" name="cc" data-size="(variant:product**38)">--}}
                        {{--<label for="size4">--}}
                            {{--<span class="button"></span>38--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="size5" name="cc" data-size="(variant:product**S)">--}}
                        {{--<label for="size5">--}}
                            {{--<span class="button"></span>S--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="size6" name="cc" data-size="(variant:product**M)">--}}
                        {{--<label for="size6">--}}
                            {{--<span class="button"></span>M--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="size7" name="cc" data-size="(variant:product**L)">--}}
                        {{--<label for="size7">--}}
                            {{--<span class="button"></span>L--}}
                        {{--</label>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<input type="checkbox" id="size8" name="cc" data-size="(variant:product**XL)">--}}
                        {{--<label for="size8">--}}
                            {{--<span class="button"></span>XL--}}
                        {{--</label>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</div>--}}

            <!-- ./filter size -->
        </div>
        <!-- ./layered -->

    </div>
</div>
