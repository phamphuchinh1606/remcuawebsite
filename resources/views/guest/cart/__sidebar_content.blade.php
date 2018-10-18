<?php use App\Common\AppCommon; ?>
<div class="sidebar-content">
    <div class="order-summary order-summary-is-collapsed">
        <h2 class="visually-hidden">Thông tin đơn hàng</h2>
        <div class="order-summary-sections">
            <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                <table class="product-table">
                    <thead>
                    <tr>
                        <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                        <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                        <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                        <th scope="col"><span class="visually-hidden">Giá</span></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $carts =  Cart::getContent()?>
                        @if(isset($carts))
                            @foreach($carts as $cart)
                                <?php $image = $cart->attributes->has('image') ? $cart->attributes['image'] : ''; ?>
                                <tr class="product" data-product-id="{{$cart->id}}" data-variant-id="{{$cart->id}}">
                                    <td class="product-image">
                                        <div class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <img class="product-thumbnail-image" alt="{{$cart->name}}" src="{{$image}}" />
                                            </div>
                                            <span class="product-thumbnail-quantity" aria-hidden="true">{{$cart->quantity}}</span>
                                        </div>
                                    </td>
                                    <td class="product-description">
                                        <span class="product-description-name order-summary-emphasis">{{$cart->name}}</span>
                                    </td>
                                    <td class="product-quantity visually-hidden">{{$cart->quantity}}</td>
                                    <td class="product-price">
                                        <span class="order-summary-emphasis">{{AppCommon::formatMoney($cart->getPriceSum())}}₫</span>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            {{--<div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">--}}
                {{--<form id="form_discount_add" accept-charset="UTF-8" method="post">--}}
                    {{--<input name="utf8" type="hidden" value="✓">--}}
                    {{--<div class="fieldset">--}}
                        {{--<div class="field  ">--}}
                            {{--<div class="field-input-btn-wrapper">--}}
                                {{--<div class="field-input-wrapper">--}}
                                    {{--<label class="field-label" for="discount.code">Mã giảm giá</label>--}}
                                    {{--<input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="off" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="" />--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="field-input-btn btn btn-default btn-disabled">--}}
                                    {{--<span class="btn-content">Sử dụng</span>--}}
                                    {{--<i class="btn-spinner icon icon-button-spinner"></i>--}}
                                {{--</button>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}

            <div class="order-summary-section order-summary-section-total-lines" data-order-summary-section="payment-lines">
                <table class="total-line-table">
                    <thead>
                    <tr>
                        <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                        <th scope="col"><span class="visually-hidden">Giá</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="total-line total-line-subtotal">
                        <td class="total-line-name">Tạm tính</td>
                        <td class="total-line-price">
                            <span class="order-summary-emphasis" data-checkout-subtotal-price-target="{{Cart::getSubTotal()}}">
                                {{AppCommon::formatMoney(Cart::getSubTotal())}}₫
                            </span>
                        </td>
                    </tr>
                    <tr class="total-line total-line-shipping">
                        <td class="total-line-name">Phí vận chuyển</td>
                        <td class="total-line-price">
                            <span class="order-summary-emphasis" data-checkout-total-shipping-target="0">
                                —
                            </span>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot class="total-line-table-footer">
                    <tr class="total-line">
                        <td class="total-line-name payment-due-label">
                            <span class="payment-due-label-total">Tổng cộng</span>
                        </td>
                        <td class="total-line-name payment-due">
                            <span class="payment-due-currency">VND</span>
                            <span class="payment-due-price" data-checkout-payment-due-target="{{Cart::getTotal()}}">
                                {{AppCommon::formatMoney(Cart::getTotal())}}₫
                            </span>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>