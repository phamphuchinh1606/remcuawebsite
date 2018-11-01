<div class="section-content">
    <div class="fieldset">
            <input name="selected_customer_shipping_province" type="hidden" value="">
            <input name="selected_customer_shipping_district" type="hidden" value="">
            <input name="selected_customer_shipping_ward" type="hidden" value="">
            <input name="utf8" type="hidden" value="✓">

            <div class="field field-show-floating-label  field-half ">
                <div class="field-input-wrapper field-input-wrapper-select">
                    <label class="field-label" for="customer_shipping_province"> Tỉnh / thành  </label>
                    <select class="field-input" name="province">
                        @foreach($provinces as $province)
                            <option value="{{$province->code}}" >{{$province->name}}</option>
                        @endforeach
                        {{--<option data-code="null" value="null" selected>  Chọn tỉnh / thành </option>--}}



                        {{--<option data-code="HC" value="50" >Hồ Chí Minh</option>--}}



                        {{--<option data-code="HI" value="1" >Hà Nội</option>--}}



                        {{--<option data-code="DA" value="32" >Đà Nẵng</option>--}}



                        {{--<option data-code="AG" value="57" >An Giang</option>--}}



                        {{--<option data-code="BV" value="49" >Bà Rịa - Vũng Tàu</option>--}}



                        {{--<option data-code="BG" value="15" >Bắc Giang</option>--}}



                        {{--<option data-code="BK" value="4" >Bắc Kạn</option>--}}



                        {{--<option data-code="BL" value="62" >Bạc Liêu</option>--}}



                        {{--<option data-code="BN" value="18" >Bắc Ninh</option>--}}



                        {{--<option data-code="BT" value="53" >Bến Tre</option>--}}



                        {{--<option data-code="BD" value="35" >Bình Định</option>--}}



                        {{--<option data-code="BI" value="47" >Bình Dương</option>--}}



                        {{--<option data-code="BP" value="45" >Bình Phước</option>--}}



                        {{--<option data-code="BU" value="39" >Bình Thuận</option>--}}



                        {{--<option data-code="CM" value="63" >Cà Mau</option>--}}



                        {{--<option data-code="CN" value="59" >Cần Thơ</option>--}}



                        {{--<option data-code="CB" value="3" >Cao Bằng</option>--}}



                        {{--<option data-code="DC" value="42" >Đắk Lắk</option>--}}



                        {{--<option data-code="DO" value="43" >Đắk Nông</option>--}}



                        {{--<option data-code="DB" value="7" >Điện Biên</option>--}}



                        {{--<option data-code="DN" value="48" >Đồng Nai</option>--}}



                        {{--<option data-code="DT" value="56" >Đồng Tháp</option>--}}



                        {{--<option data-code="GL" value="41" >Gia Lai</option>--}}



                        {{--<option data-code="HG" value="2" >Hà Giang</option>--}}



                        {{--<option data-code="HM" value="23" >Hà Nam</option>--}}



                        {{--<option data-code="HT" value="28" >Hà Tĩnh</option>--}}



                        {{--<option data-code="HD" value="19" >Hải Dương</option>--}}



                        {{--<option data-code="HP" value="20" >Hải Phòng</option>--}}



                        {{--<option data-code="HU" value="60" >Hậu Giang</option>--}}



                        {{--<option data-code="HO" value="11" >Hòa Bình</option>--}}



                        {{--<option data-code="HY" value="21" >Hưng Yên</option>--}}



                        {{--<option data-code="KH" value="37" >Khánh Hòa</option>--}}



                        {{--<option data-code="KG" value="58" >Kiên Giang</option>--}}



                        {{--<option data-code="KT" value="40" >Kon Tum</option>--}}



                        {{--<option data-code="LI" value="8" >Lai Châu</option>--}}



                        {{--<option data-code="LD" value="44" >Lâm Đồng</option>--}}



                        {{--<option data-code="LS" value="13" >Lạng Sơn</option>--}}



                        {{--<option data-code="LO" value="6" >Lào Cai</option>--}}



                        {{--<option data-code="LA" value="51" >Long An</option>--}}



                        {{--<option data-code="ND" value="24" >Nam Định</option>--}}



                        {{--<option data-code="NA" value="27" >Nghệ An</option>--}}



                        {{--<option data-code="NB" value="25" >Ninh Bình</option>--}}



                        {{--<option data-code="NT" value="38" >Ninh Thuận</option>--}}



                        {{--<option data-code="PT" value="16" >Phú Thọ</option>--}}



                        {{--<option data-code="PY" value="36" >Phú Yên</option>--}}



                        {{--<option data-code="QB" value="29" >Quảng Bình</option>--}}



                        {{--<option data-code="QM" value="33" >Quảng Nam</option>--}}



                        {{--<option data-code="QG" value="34" >Quảng Ngãi</option>--}}



                        {{--<option data-code="QN" value="14" >Quảng Ninh</option>--}}



                        {{--<option data-code="QT" value="30" >Quảng Trị</option>--}}



                        {{--<option data-code="ST" value="61" >Sóc Trăng</option>--}}



                        {{--<option data-code="SL" value="9" >Sơn La</option>--}}



                        {{--<option data-code="TN" value="46" >Tây Ninh</option>--}}



                        {{--<option data-code="TB" value="22" >Thái Bình</option>--}}



                        {{--<option data-code="TY" value="12" >Thái Nguyên</option>--}}



                        {{--<option data-code="TH" value="26" >Thanh Hóa</option>--}}



                        {{--<option data-code="TT" value="31" >Thừa Thiên Huế</option>--}}



                        {{--<option data-code="TG" value="52" >Tiền Giang</option>--}}



                        {{--<option data-code="TV" value="54" >Trà Vinh</option>--}}



                        {{--<option data-code="TQ" value="5" >Tuyên Quang</option>--}}



                        {{--<option data-code="VL" value="55" >Vĩnh Long</option>--}}



                        {{--<option data-code="VT" value="17" >Vĩnh Phúc</option>--}}



                        {{--<option data-code="YB" value="10" >Yên Bái</option>--}}



                    </select>
                </div>

            </div>


            <div class="field field-show-floating-label  field-half ">
                <div class="field-input-wrapper field-input-wrapper-select">
                    <label class="field-label" for="customer_shipping_district">Quận / huyện</label>
                    <select class="field-input" name="district">
                        <option data-code="null" value="null" selected="">Chọn quận / huyện</option>

                        <option data-code="HC466" value="466">Quận 1</option>

                        <option data-code="HC467" value="467">Quận 2</option>

                        <option data-code="HC468" value="468">Quận 3</option>

                        <option data-code="HC469" value="469">Quận 4</option>

                        <option data-code="HC470" value="470">Quận 5</option>

                        <option data-code="HC471" value="471">Quận 6</option>

                        <option data-code="HC472" value="472">Quận 7</option>

                        <option data-code="HC473" value="473">Quận 8</option>

                        <option data-code="HC474" value="474">Quận 9</option>

                        <option data-code="HC475" value="475">Quận 10</option>

                        <option data-code="HC476" value="476">Quận 11</option>

                        <option data-code="HC477" value="477">Quận 12</option>

                        <option data-code="HC478" value="478">Quận Gò Vấp</option>

                        <option data-code="HC479" value="479">Quận Tân Bình</option>

                        <option data-code="HC480" value="480">Quận Bình Thạnh</option>

                        <option data-code="HC481" value="481">Quận Phú Nhuận</option>

                        <option data-code="HC482" value="482">Quận Thủ Đức</option>

                        <option data-code="HC483" value="483">Huyện Củ Chi</option>

                        <option data-code="HC484" value="484">Huyện Hóc Môn</option>

                        <option data-code="HC485" value="485">Huyện Bình Chánh</option>

                        <option data-code="HC486" value="486">Huyện Nhà Bè</option>

                        <option data-code="HC487" value="487">Huyện Cần Giờ</option>

                        <option data-code="HC679" value="679">Quận Bình Tân</option>

                        <option data-code="HC680" value="680">Quận Tân Phú</option>

                    </select>
                </div>

            </div>
    </div>
</div>

<script type="text/ecmascript">
    $(document).ready(function(){
        $('select[name=province]').val({{$shippingInfo['province']}});
        $('select[name=district]').val({{$shippingInfo['district']}});
        $('select[name=province]').on('change',function(){
            let value = $(this).val();
            let params = {
                type: 'GET',
                url: '/cart/district',
                data: 'province_code='+ value,
                dataType: 'json',
                success: function(data) {
                    let selectDistrict = $('select[name=district]');
                    selectDistrict.html('');
                    data.forEach(function(district){
                        selectDistrict.append(
                            "<option value='"+district.code+"'>"+district.label+"</option>"
                        );
                    });
                }
            };
            jQuery.ajax(params);
        });
    });
</script>
