<div class="block left-module product">
    <p class="title_block">Sản phẩm HOT</p>
    <div class="block_content">
        <!-- layered -->
        <div class="layered layered-category">
            <div class="layered-content">
                <div id="listPdHot">
                    @if(isset($productHots))
                        @foreach($productHots as $product)
                            <div class="itemProduct">
                                @include('guest.common.__product_show_item',['product' => $product])
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>