@extends('guest.layouts.master')

@section('head.title')
    {{$appInfo->app_name}}
@endsection

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/home.css?v=1543') }}' rel='stylesheet' type='text/css' media='all'/>
@endsection

@section('class_body','stHome')

@section('body.content')
    {{--Slider And Menu--}}
    <section class="slider-sidebar">
        <div class="container">
            <div class="row">
                <div id="menuSidebar" class="col-md-3 visible-lg visible-md">
                    @include('guest.home.partials.__menu_sidebar')
                </div>
                <div id="mainSlider" class="col-md-9 ">
                    @include('guest.home.partials.__slider_sidebar',['banners' => $banners])
                </div>
            </div>
        </div>
    </section>

        {{--Banner-Home-Top--}}
        @include('guest.home.partials.__banner_top',['topBanners' => $topBanners])

        {{--Home Product Block News--}}
        @include('guest.home.partials.__product_home_block',['blockHeader' => 'Sản Phẩm Mới','products' => $productNews])

        {{--Home Product Block Hots--}}
        @include('guest.home.partials.__product_home_block',['blockHeader' => 'Sản Phẩm Bán Chạy','products' => $productHots])

        {{--Home Product Block Made--}}
        {{--@include('guest.home.partials.__product_home_block_1')--}}
        {{--Home Product Block Fade--}}
        {{--@include('guest.home.partials.__product_home_block_2')--}}
        {{--Home Product Block Hot--}}
        {{--@include('guest.home.partials.__product_home_block_3')--}}
        {{--Home Product Block Ca Sau--}}
        {{--@include('guest.home.partials.__product_home_block_4')--}}
        {{--Home Product Block Sale--}}
        {{--@include('guest.home.partials.__product_home_block_5')--}}

        {{--Video Make Product--}}
        @include('guest.home.partials.__make_product_video')

        {{--Process Delivery--}}
        @include('guest.home.partials.__process_delivery')


    <div class="clear"></div>

    {{--Home Blog New--}}
    @include('guest.home.partials.__blog_new')

    {{--Home Brands--}}
    {{--@include('guest.home.partials.__brand')--}}
@endsection
