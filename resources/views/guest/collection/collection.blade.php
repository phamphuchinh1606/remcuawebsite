@extends('guest.layouts.master')

@section('head.title','Vi Da Khac Ten')

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
@endsection

@section('template','collection')

@section('body.content')
    <section id="stCollection">
        {{--Breadcrumb--}}
        {{--@include('guest.common.__breadcrumb_show')--}}

        {{ Breadcrumbs::render('guest.collection', $productType) }}

        <div class="container">
            <div class="main bg_w collection">
                <div class="row">
                    <!-- Left colunm -->
                    <div class="column col-xs-12 col-sm-4 col-md-3" id="left_column">
                        <div class="box_sidebar">
                            {{--@include('guest.common.__right_linklist_menu')--}}

                            @include('guest.common.__search_product')
                        </div>
                    </div>

                    <!-- view-product-list-->
                    <div class="center_column col-xs-12 col-sm-8 col-md-9 product-col" id="center_column">
                        <div id="view-product-list" class="view-product-list">
                            <div class="collection_head relative">
                                <div class="page_head">
                                    <h1 class="collection_title ins_title">
                                        Ví Khắc Tên Cao Cấp
                                    </h1>
                                </div>
                                <div class="fil_mobile visible-xs">
                                    <a href="javascript:void(0)"><i class="fa fa-filter" aria-hidden="true"></i></a>
                                </div>
                                <ul class="display-product-option">
                                    <li class="view-as-grid selected" data-view="view_grid">
                                        <span>grid</span>
                                    </li>
                                    <li class="view-as-list" data-view="view_list">
                                        <span>list</span>
                                    </li>
                                </ul>

                                <div class="browse-tags">
                                    <span>Sắp xếp theo:</span>
                                    <span class="custom-dropdown custom-dropdown--white">
									<select class="sort-by custom-dropdown__select custom-dropdown__select--white">
										{{--<option value="manual">Sản phẩm nổi bật</option>--}}
                                        <option value="created-descending" >Mới nhất</option>
                                        <option value="created-ascending" >Cũ nhất</option>
										<option value="price-ascending" >Giá: Tăng dần</option>
										<option value="price-descending" >Giá: Giảm dần</option>
										<option value="title-ascending" >Tên: A-Z</option>
										<option value="title-descending" >Tên: Z-A</option>
										<option value="best-selling">Bán chạy nhất</option>
									</select>
								</span>
                                </div>

                            </div>
                            <!-- PRODUCT LIST -->
                            <div id="pd_collection" style="display: block;">
                                <ul class="product-list filter products clearfix notStyle pdListItem view_grid">
                                    @foreach($products as $product)
                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">
                                            @include('guest.common.__product_show_item',['product' => $product])
                                        </li>
                                    @endforeach
                                </ul>


                                <div class="clearfix"></div>
                                <div class="col-md-12 content_sortPagiBar pagi">
                                    <div id="pagination" class="clearfix">

                                        {{$products->links('both.common.view_pagging')}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <input type="text" class="hidden" id="coll-handle" value="(collectionid:product={{$productType->id}})">
    <div class="overlayFilter filter view_grid"></div>
    <script>
        var productTypeId = '{{$productType->id}}';
        var sortBy = '{{$sortBy != null ? $sortBy : "created-descending"}}';
        Haravan.queryParams = {};
        if (location.search.length) {
            for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                aKeyValue = aCouples[i].split('=');
                if (aKeyValue.length > 1) {
                    Haravan.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                }
            }
        }
        var collFilters = jQuery('.coll-filter');
        collFilters.change(function() {
            var newTags = [];
            var newURL = '';
            delete Haravan.queryParams.page;
            collFilters.each(function() {
                if (jQuery(this).val()) {
                    newTags.push(jQuery(this).val());
                }
            });

            newURL = '/collection/' + 'thoi-trang';
            if (newTags.length) {
                newURL += '/' + newTags.join('+');
            }
            var search = jQuery.param(Haravan.queryParams);
            if (search.length) {
                newURL += '?' + search;
            }
            location.href = newURL;

        });
        jQuery('.sort-by')
            .val(sortBy)
            .bind('change', function() {
                Haravan.queryParams.sort_by = jQuery(this).val();
                location.search = jQuery.param(Haravan.queryParams);
            });
    </script>
@endsection
