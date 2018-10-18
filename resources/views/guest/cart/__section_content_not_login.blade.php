<div class="section-content section-customer-information no-mb">

    <input name="utf8" type="hidden" value="✓">
    <div class="inventory_location_data">
        <input name="customer_shipping_district" type="hidden" value="" />
        <input name="customer_shipping_ward" type="hidden" value="" />

    </div>
    <p class="section-content-text">
        Bạn đã có tài khoản?
        <a href="{{route('home')}}">Đăng nhập</a>
    </p>
    <div class="fieldset">
        <div class="field   ">
            <div class="field-input-wrapper">
                <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="billing_address[full_name]" value="" />
            </div>

        </div>
        <div class="field  field-two-thirds  ">
            <div class="field-input-wrapper">
                <label class="field-label" for="checkout_user_email">Email</label>
                <input placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email" name="checkout_user[email]" value="" />
            </div>

        </div>
        <div class="field field-required field-third  ">
            <div class="field-input-wrapper">
                <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                <input placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="11" type="tel" id="billing_address_phone" name="billing_address[phone]" value="" />
            </div>
        </div>
        <div class="field   ">
            <div class="field-input-wrapper">
                <label class="field-label" for="billing_address_address1">Địa chỉ</label>
                <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="billing_address[address1]" value="" />
            </div>

        </div>

    </div>
</div>