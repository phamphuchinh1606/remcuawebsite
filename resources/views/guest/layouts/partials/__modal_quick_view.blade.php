<?php $amount = ''; ?>

<div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title " id="">Thông tin sản phẩm</h4>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <form method="post" action="/cart/add">
                            <div class="col-lg-5 col-md-6">
                                <div class="image-zoom row">

                                    <img class="p-product-image-feature" src="">
                                    <div id="p-sliderproduct" class="owl_pages ">
                                        <ul class="slides"></ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 pull-right" style="padding: 0px 10px;">

                                <div class="form-input">
                                    <div class="product-title p-title">
                                    </div>
                                    <div class="product-price">
                                        <span class="p-price "></span>
                                        <del></del>
                                    </div>

                                </div>
                                <div class="form-des"></div>
                                <div class="clearfix"></div>
                                <div class="form-input vid ">
                                    <div class="m-vendor">
                                    </div>
                                    <div class="m-sku">
                                    </div>
                                    <div class="m-tt">
                                    </div>
                                </div>
                                <div class="p-option-wrapper">
                                    <select name="id" class="" id="p-select"></select>
                                </div>

                                <div class="form-input ">
                                    <label>Số lượng</label>
                                    <input name="quantity" type="number" min="1" value="1"/>
                                </div>

                                <div class="form-input" style="width: 100%">
                                    <button type="button" class="btn-addcart">Thêm vào giỏ</button>
                                    <button disabled
                                            class="btn-detail addtocart btn-color-add btn-min-width btn-mgt btn-soldout">
                                        Hết hàng
                                    </button>
                                    <div class="qv-readmore">
                                        <span> hoặc </span><a class="read-more p-url" href="" role="button">Xem chi
                                            tiết</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    var callBack = function (variant, selector) {
        if (variant) {
            modal = $('#quick-view-modal');
            console.log(variant.compare_at_price);
            $('.p-price').html(Haravan.formatMoney(variant.price, "{{$amount}}₫"));
            modal.find('.btn-addcart').attr('data-price', variant.price)
            if (variant.compare_at_price > variant.price) {
                modal.find('del').html(Haravan.formatMoney(variant.compare_at_price, "{{$amount}}₫"));
                modal.find('.btn-addcart').attr('data-del', variant.compare_at_price);
            } else {
                modal.find('del').html('');
                modal.find('.btn-addcart').attr('data-del', 0);
            }
            if (variant.available) {
                modal.find('.btn-addcart').css('display', 'block');
                modal.find('.btn-soldout').css('display', 'none');
            }
            else {
                modal.find('.btn-addcart').css('display', 'none');
                modal.find('.btn-soldout').css('display', 'block');
            }
            if (variant.sku != null) {
                modal.find('.m-sku').html('<span>Mã sản phẩm: </span>' + variant.sku);
            } else {
                modal.find('.m-sku').html('<span>Mã sản phẩm: </span>Chưa rõ');
            }
        }
        else {
            modal.find('.btn-addcart').css('display', 'none');
            modal.find('.btn-soldout').css('display', 'block');
        }
    }
    var p_select_data = $('.p-option-wrapper').html();
    var p_zoom = $('.image-zoom').html();
    var quickViewProduct = function (purl) {

        if ($(window).width() < 680) {
            window.location = purl;
            return false;
        }
        modal = $('#quick-view-modal');
        modal.modal('show');
        $.ajax({
            url: purl,
            async: false,
            success: function (product) {
                $.each(product.options, function (i, v) {
                    product.options[i] = v.name;
                })
                modal.find('.p-title').html('<h1>' + product.title + '</h1>');
                modal.find('.p-option-wrapper').html(p_select_data);
                modal.find('.m-vendor').html('<span>Nhà cung cấp: </span>' + product.vendor);
                var productdes = product.description;

                if (productdes != '' && productdes != null) {
                    var re_productdes = productdes.replace(/(<([^>]+)>)/ig, "")
                    var des = re_productdes.split("&nbsp;").splice(0, 50).join(" ") + "...";
                    modal.find('.form-des').html(des);
                    modal.find('.form-des').show();
                } else {
                    modal.find('.form-des').html('Chưa có mô tả cho sản phẩm này!');
                }

                $('.image-zoom').html(p_zoom);
                modal.find('.p-url').attr('href', product.url);
                if (product.images.length == 0) {
                    modal.find('.p-product-image-feature').attr('src', 'https://hstatic.net/0/0/global/noDefaultImage6_large.gif');
                }
                else {
                    $('#p-sliderproduct').remove();
                    $('.image-zoom').append("<div id='p-sliderproduct' class='owl_pages '>");
                    $('#p-sliderproduct').append("<ul class='slides owlDesign '>");
                    $('#p-sliderproduct .slides').hide();
                    $.each(product.images, function (i, v) {
                        elem = $('<li class="product-thumb">').append('<a href="#" data-image="" data-zoom-image=""><img /></a>');
                        elem.find('a').attr('data-image', Haravan.resizeImage(v, 'medium'));
                        elem.find('a').attr('data-zoom-image', v);
                        elem.find('img').attr('data-image', Haravan.resizeImage(v, 'medium'));
                        elem.find('img').attr('data-zoom-image', v);
                        elem.find('img').attr('src', v);
                        modal.find('.slides').append(elem);
                    })

                    modal.find('.p-product-image-feature').attr('src', product.featured_image);
                    $(".modal-footer .btn-readmore").attr('href', purl);
                    var iflag = 0;
                    $('#p-sliderproduct img').load(function () {
                        iflag++;
                        if (iflag == $('#p-sliderproduct img').length) {
                            setTimeout(function () {
                                var owl = $('#p-sliderproduct .slides');
                                owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                                    'initialize.owl.carousel initialize.owl.carousel ' +
                                    'resize.owl.carousel resized.owl.carousel ' +
                                    'refresh.owl.carousel refreshed.owl.carousel ' +
                                    'update.owl.carousel updated.owl.carousel ' +
                                    'drag.owl.carousel dragged.owl.carousel ' +
                                    'translate.owl.carousel translated.owl.carousel ' +
                                    'to.owl.carousel changed.owl.carousel', function (e) {
                                    $('#p-sliderproduct .slides').show();
                                })
                                owl.owlCarousel({
                                    items: 4,
                                    loop: false,
                                    autoplay: false,
                                    margin: 5,
                                    responsiveClass: true,
                                    nav: true,
                                    navText: ['‹', '›'],
                                    responsive: {
                                        0: {
                                            items: 1
                                        },
                                        370: {
                                            items: 2
                                        },
                                        480: {
                                            items: 3
                                        },
                                        768: {
                                            items: 4
                                        },
                                        992: {
                                            items: 4
                                        }
                                    }
                                });
                                modal.find('.owl-item:first-child .product-thumb').addClass('active');
                            }, 500)
                        }
                    })
                }
                $.each(product.variants, function (i, v) {
                    modal.find('select#p-select').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                })
                if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1)
                    $('.p-option-wrapper').hide();
                else
                    $('.p-option-wrapper').show();
                if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1) {
                    callBack(product.variants[0], null);
                }
                else {
                    new Haravan.OptionSelectors("p-select", {product: product, onVariantSelected: callBack});
                    debugger
                    if (product.options.length == 1 && product.options[0].indexOf('Tiêu đề') == -1)

                        modal.find('.selector-wrapper:eq(0)').prepend('<label>' + product.options[0] + '</label>');

                    $('.p-option-wrapper select:not(#p-select)').each(function () {
                        $(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
                        $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
                    });
                    callBack(product.variants[0], null);
                }

            }
        });
        //$('.modal-backdrop').css('opacity', '0');
        return false;
    }
    $('#quick-view-modal ').on('click', '.product-thumb img', function (event) {
        event.preventDefault();
        modal = $('#quick-view-modal');
        modal.find('.p-product-image-feature').attr('src', $(this).attr('data-zoom-image'));
        modal.find('.product-thumb').removeClass('active');
        $(this).parents('li').addClass('active');
        return false;
    })
    $(document).on('click', 'a.btn-quickview-1', function (event) {
        event.preventDefault();
        quickViewProduct($(this).attr('data-handle'));
    })
</script>

<div class="modal fade tbPopup" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="closePopup" data-dismiss="modal" aria-label="Close"></button>
                <h4 class="modal-title" id="myModalLabel">Thông Báo</h4>
            </div>
            <div class="modal-body">
                <p class="subText">
                    Thêm vào giỏ hàng thành công...
                </p>
                <div class="action text-center">
                    <a href="/cart" class="viewCart">Xem giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>