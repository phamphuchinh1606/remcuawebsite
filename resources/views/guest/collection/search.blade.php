@extends('guest.layouts.master')

@section('head.title','Tìm kiếm sản phẩm')

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
    <style>
        .product-list.products .itemProduct {
            margin-top: 0px;
        }
    </style>
@endsection

@section('template','collection')

@section('body.content')
    <section id="stSearchPage">
        {{ Breadcrumbs::render('guest.search', 'Tìm kiếm: Kết quả tìm kiếm với ( '.$product_name.' )') }}

        <div class="container">
            <div class="searchResults">
                <div class="searchHead">
                    <p>
                        Tìm thấy <span> {{count($products)}} kết quả với từ khóa <i>"{{$product_name}}"</i>...</span>
                    </p>
                </div>
                <ul class="product-list filter products clearfix notStyle pdListItem view_grid">
                    @if(isset($products) && count($products) > 0)
                        @foreach($products as $product)
                            <li class="itemProduct col-md-3 col-sm-6 col-xs-6">
                                @include('guest.common.__product_show_item',['product' => $product])
                            </li>
                        @endforeach
                    @endif
                </ul>
                <div class="clearfix"></div>
                <div class="col-md-12 content_sortPagiBar pagi">
                    <div id="pagination" class="clearfix">
                        {{$products->appends(['product_name'=>$product_name])->links('both.common.view_pagging')}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
