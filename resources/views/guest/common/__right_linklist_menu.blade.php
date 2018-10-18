<div class="block left-module linklist">
    <p class="title_block">Danh mục sản phẩm</p>
    <div class="block_content">
        <!-- layered -->
        <div class="layered layered-category">
            <div class="layered-content">
                <ul class="tree-menu notStyle">
                    @foreach($productTypes as $productType)
                        <li class="">
                            <span></span>
                            <a class="" href="{{route('collection',['id' => $productType->id])}}" title="Đồng hồ" target="_self">
                                {{$productType->product_type_name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- ./layered -->
    </div>
</div>