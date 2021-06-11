@extends('templates.fashion-hub.master')
@section('title','Trung tâm thời trang thương mại điện tử trực tuyến')
@section('content')
<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span>f</span>ashion
			<span>h</span>ub</h4>
	</div>
	<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{ route("temp.fashion-hub.index") }}>Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--Payment-->
    <section class="payment_w3ls py-5">
        <div class="container">
            <div class="privacy about">
                <h5 class="head_agileinfo text-center text-capitalize pb-5">
                    <span>Chi</span> tiết hóa đơn</h5>
                <!--/tabs-->
                <div class="responsive_tabs innfpage-tabs">
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>Thanh toán bằng tiền mặt</li>
                            <li>Tín dụng/Ghi nợ</li>
                            <li>Thẻ ngân hàng</li>
                            <li>Tài khoản Paypal</li>
                        </ul>
                        <div class="resp-tabs-container">
                            <!--/tab_one-->
                            <div class="tab1">
                                <div class="pay_info">
                                    <div class="vertical_post check_box_fpay">
                                        <h5>Phí vận chuyển - hiện chưa có</h5>
                                        <div class="checkbox">
                                            <div class="check_box_one cashon_delivery">
                                                <label class="anim">
                                                    <input type="checkbox" class="checkbox position-relative">
                                                    <span>Chúng tôi cũng chấp nhận thẻ Tín dụng / Thẻ ghi nợ khi giao hàng. Vui lòng kiểm tra với các đại lý.</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--//tab_one-->
                            <div class="tab2">
                                <div class="pay_info">
                                    <form class="creditly-card-form shopf-sear-headinfo_form">
                                        <section class="creditly-wrapper payf_wrapper">
                                            <div class="credit-card-wrapper">
                                                <div class="first-row form-group">
                                                    <div class="controls">
                                                        <label class="control-label">Tên chủ thẻ</label>
                                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Họ tên">
                                                    </div>
                                                    <div class="paymntf_card_number_grids">
                                                        <div class="fpay_card_number_grid_left">
                                                            <div class="controls">
                                                                <label class="control-label">Số thẻ</label>
                                                                <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                                    autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                                    placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                            </div>
                                                        </div>
                                                        <div class="fpay_card_number_grid_right">
                                                            <div class="controls">
                                                                <label class="control-label">CVV</label>
                                                                <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                            </div>
                                                        </div>
                                                        <div class="clear"> </div>
                                                    </div>
                                                    <div class="controls">
                                                        <label class="control-label">Ngày hết hạn</label>
                                                        <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                    </div>
                                                </div>
                                                <input class="btn btn-primary submit" type="submit" value="Thanh toán">
                                            </div>
                                        </section>
                                    </form>

                                </div>
                            </div>
                            <div class="tab3">

                                <div class="pay_info">
                                    <div class="vertical_post">
                                        <form>
                                            <h5>Ngân Hàng Phổ Biến </h5>
                                            <div class="swit-radio">
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio" checked="">
                                                            <i></i>VietinBank</label>
                                                    </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio">
                                                            <i></i>Đông Á Bank</label>
                                                    </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio">
                                                            <i></i>Sacombank</label>
                                                    </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio">
                                                            <i></i>Vietcombank</label>
                                                    </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio">
                                                            <i></i>Eximbank</label>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <h5>ngân hàng khác</h5>
                                            <div class="section_room_pay">
                                                <select class="year">
                                                    <option value="">=== Ngân hàng khác ===</option>
                                                    <option value="ALB-NA">Nam Á</option>
                                                    <option value="ADB-NA">SHB</option>
                                                    <option value="BBK-NA">VPBank</option>
                                                    <option value="BBC-NA">Đông Á</option>
                                                    <option value="BBR-NA">HDBank</option>
                                                    <option value="BOI-NA">Bắc Á</option>
                                                    <option value="BOM-NA">ABBank</option>
                                                    <option value="CSB-NA">Techcombank</option>
                                                    <option value="CBI-NA">OCB</option>
                                                    <option value="CUB-NA">MB Bank</option>
                                                    <option value="CRP-NA">Agribank</option>
                                                    <option value="DBK-NA">TPBank</option>
                                                    <option value="DCB-NA">VIB</option>
                                                </select>
                                            </div>
                                            <input type="submit" value="Thanh toán ngay">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab4">
                                <div class="pay_info">
                                    <div class="row">
                                        <div class="col-md-6 tab-grid">
                                            <img class="pp-img" src={{ asset("templates/fashion-hub/img/paypal.png") }} alt="Image Alternative text" title="Image Title">
                                            <p>Chú ý: Bạn sẽ đến trang web của PayPal để hoàn tất thanh toán một cách an toàn.
                                            </p>
                                            <a href="#" class="btn btn-primary">Kiểm tra trên Paypal</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="creditly-card-form shopf-sear-headinfo_form">
                                                <section class="creditly-wrapper payf_wrapper">
                                                    <div class="credit-card-wrapper">
                                                        <div class="first-row form-group">
                                                            <div class="controls">
                                                                <label class="control-label">Chủ thẻ </label>
                                                                <input class="billing-address-name form-control" type="text" name="name" placeholder="Họ tên">
                                                            </div>
                                                            <div class="paymntf_card_number_grids">
                                                                <div class="fpay_card_number_grid_left">
                                                                    <div class="controls">
                                                                        <label class="control-label">Số thẻ</label>
                                                                        <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                                            autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                                            placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                                    </div>
                                                                </div>
                                                                <div class="fpay_card_number_grid_right">
                                                                    <div class="controls">
                                                                        <label class="control-label">CVV</label>
                                                                        <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                                    </div>
                                                                </div>
                                                                <div class="clear"> </div>
                                                            </div>
                                                            <div class="controls">
                                                                <label class="control-label">Ngày hết hạn</label>
                                                                <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                            </div>
                                                        </div>
                                                        <input class="btn btn-primary submit" type="submit" value="Thanh toán">
                                                    </div>
                                                </section>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//tabs-->
            </div>
        </div>
    </section>
    <!-- //payment -->
@endsection
